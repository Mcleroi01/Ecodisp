<?php

namespace App\Http\Controllers\Api;

use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Notifications\AdmissionCreated;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\ValidationException;


class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admission = Admission::latest()->get();

        return response()->json($admission);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        try {
            // Validation des données d'entrée
            $validatedData = $request->validate([
                'programmes' => 'required|string',
                'date_demanded' => 'required|date',
                'name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|string|email',
                'phone' => 'required|string',
                // Ajoutez les validations pour d'autres champs si nécessaire
            ]);

            // Log des données validées
            Log::info('Données validées : ', $validatedData);

            // Création de l'admission
            $admission = Admission::create($validatedData);

            // Log des données d'admission créées
            Log::info('Admission créée : ', $admission->toArray());

            // Envoi de la notification par email
            set_time_limit(1200);
            try {
                Notification::route('mail', $admission->email)
                    ->notify(new AdmissionCreated($admission));
                Log::info("Email envoyé avec succès à : " . $admission->email);
            } catch (\Exception $e) {
                Log::error("Erreur lors de l'envoi de l'email : $admission->email" . $e->getMessage());
                return response()->json(['error' => "Failed to send email: " . $e->getMessage()], 500);
            }

            return response()->json($admission, 201);
        } catch (ValidationException $e) {
            // Retourner les messages d'erreur de validation
            return response()->json([
                'errors' => $e->errors(),
                'message' => 'Les données fournies ne sont pas valides'
            ], 422);
        } catch (\Exception $th) {
            Log::error("Erreur lors de la création de l'admission : " . $th->getMessage());
            return response()->json(['error' => "Failed to create admission: $th"], 500);
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
