<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Document;
use App\Models\Admission;
use App\Models\Demandeur;
use App\Models\Programme;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Notifications\FailAdmission;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SucessAdmission;
use App\Notifications\AdmissionCreated;
use App\Http\Requests\StoreAdmissionRequest;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\UpdateAdmissionRequest;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::latest()->get();
        return view('admissions.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $utilisateurs = Demandeur::all();
        $programmes = Programme::all();
        return view('admissions.create', compact('utilisateurs', 'programmes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $demandeur = Demandeur::firstOrCreate(
                [
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'telephone' => $request->telephone ?? '',
                    'adresse' => $request->adresse ?? '',
                    'date_naissance' => $request->date ?? null,
                    'sexe' => $request->sexe ?? '',
                    'nationalité' => $request->nationalité ?? '',
                    'type_utilisateur' => 'autre',
                    'email' => $request->email
                ]
            );

            // Créer la demande
            $admission = Admission::create([
                'demandeur_id' => $demandeur->id,
                'programme_id' => $request->programme_id,
                'date_demande' => now(),
                'statut' => 'en attente',
                'fee' => 100.00, // Par exemple, définir les frais d'admission ici

            ]);

            // Traiter les documents
            if ($request->hasFile('documents')) {
                foreach ($request->file('documents') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('documents/' . $admission->id, $fileName, 'public');

                    Document::create([
                        'admission_id' => $admission->id,
                        'type' => $file->getClientOriginalExtension(),
                        'chemin_fichier' => $filePath,
                    ]);
                }
            }

            set_time_limit(1200);
            try {
                Notification::route('mail', $admission->demandeur->email)
                    ->notify(new AdmissionCreated($admission));
                Log::info("Email envoyé avec succès à : " . $admission->demandeur->email);
            } catch (\Exception $e) {
                Log::error("Erreur lors de l'envoi de l'email : $admission->demandeur->email" . $e->getMessage());
                return response()->json(['error' => "Failed to send email: " . $e->getMessage()], 500);
            }

            return redirect()->route('payment.form', $admission->id);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        return view('admissions.show', compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {

        try {
            $admission = Admission::findOrFail($id);

            if ($admission->statut == 'en attente') {

                $admission->statut = $request->statut;
                $admission->save();

                // Générer un mot de passe initial basé sur le prénom

                $password = Str::random(10);

                // Créer le compte étudiant
                $student = Student::create([
                    'demandeur_id' => $admission->id,
                    'email'=>$admission->demandeur->email,
                    'password' => Hash::make($password)
                ]);

                // Envoyer une notification de succès par email
                Notification::route('mail', $admission->demandeur->email)
                    ->notify(new SucessAdmission($admission, $password));
                Log::info("Email envoyé avec succès à : " . $admission->demandeur->email);

                return redirect()->route('admissions.index')->with('success', 'Statut mis à jour avec succès.');
            } else {
                // Si le statut est déjà mis à jour, renvoyer une message d'erreur
                Notification::route('mail', $admission->demandeur->email)
                    ->notify(new FailAdmission($admission));
                Log::info("Email envoyé avec succès à : " . $admission->demandeur->email);
                return redirect()->route('admissions.index')->with('error', 'Statut déjà mis à jour.');
            }
        } catch (\Exception $e) {
            // Gérer les exceptions et enregistrer l'erreur dans les logs
            Log::error("Erreur lors de la mise à jour du statut de l'admission : " . $e->getMessage());
            return redirect()->route('admissions.index')->with('error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }
}
