<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FraisController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdmissionController;





Route::get('/', [ClientController::class, 'homePage'])->name('public.client.home');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact.home');
Route::get('/etudiants/inscrits', [ClientController::class, 'student'])->name('students.home');
Route::get('/Traveaux/dea',[ClientController::class, 'dea'])->name('dea.home');
Route::get('/blog/actualites', [ClientController::class, 'article'])->name('articles.home');
Route::get('/futures/etudiant',[ClientController::class,'admission'])->name('admissions.home');
Route::get('/notre/ecole/doctoral/apropos',[ClientController::class, 'about'])->name('about.home');
Route::post('/Admissions/form/submit', [ClientController::class, ''])->name('public.client.submit');
Route::get('/Admissions/form', [ClientController::class,'admissionForm'])->name('public.client.form');
Route::get('/admission/create', [AdmissionController::class, 'create'])->name('admission.create');
Route::get('/admission/{admissionId}/payment', [FraisController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/admission/payment/initiate-payment', [FraisController::class, 'initiatePayment'])->name('payment.initiate');
Route::get('/admission/payment/payment-callback', [FraisController::class, 'handleCallback'])->name('payment.callback');

Route::get('admin/site/manager/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin/authenticate/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('admissions/{id}/status', [AdmissionController::class, 'updateStatus'])->name('admissions.updateStatus');
    Route::resource('/admissions', AdmissionController::class);
});


Route::middleware('auth:student')->group(function () {
    Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    
});



require __DIR__ . '/auth.php';
