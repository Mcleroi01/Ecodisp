<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.student-login'); // Créez cette vue pour la connexion des étudiants
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('student')->attempt($credentials, $request->remember)) {
            return redirect()->intended(route('student.dashboard')); // Rediriger vers le tableau de bord étudiant
        }

        return back()->withErrors(['email' => 'Les informations d\'identification ne sont pas correctes.']);
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login'); // Rediriger vers la page de connexion étudiant
    }
}
