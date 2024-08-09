<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Admission;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Notifications\AdmissionCreated;
use Illuminate\Support\Facades\Notification;

class ClientController extends Controller
{
    public function homePage()
    {
        return view('public.client.home');
    }

    public function admissionForm()
    {
        return view('public.client.form');
    }

    public function AdmissionSubimit(Request $request)
    {
        return view('public.client.admission_submit');
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

    public function article(){
        return view('public.client.article');
    }

    public function about(){
        return view('public.client.about');
    }

    public function contact(){
        return view('public.client.contact');
    }

    public function dea(){
        return view('public.client.dea');
    }

    public function student(){
        return view('public.client.student');
    }
}
