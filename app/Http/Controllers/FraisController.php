<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Frais;
use App\Models\Admission;
use Illuminate\Http\Request;
use App\Services\CinetPayService;
use App\Http\Requests\StoreFraisRequest;
use App\Http\Requests\UpdateFraisRequest;

class FraisController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $cinetPayService;
   
    public function __construct(CinetPayService $cinetPayService)
    {
        $this->cinetPayService = $cinetPayService;
    }

    public function showPaymentForm($admissionId)
    {
        $admission = Admission::findOrFail($admissionId);
        return view('payment.form', compact('admission'));
    }

    public function initiatePayment(Request $request)
    {

        try {
            $transactionId = uniqid();
            $amount = $request->amount;
            $currency = 'USD'; // ou la monnaie que vous utilisez
            $description = 'Frais d\'admission';
            $returnUrl = route('payment.callback');

            $response = $this->cinetPayService->initiatePayment($transactionId, $amount, $currency, $description, $returnUrl);

            if ($response['code'] == '201') {
                return redirect($response['data']['payment_url']);
            } else {
                return back()->withErrors(['message' => 'Erreur lors de l\'initialisation du paiement']);
            }
        } catch (Exception $e) {
            return response()->json(['error' => "Failed : " . $e->getMessage()], 500);
        }
       
    }

    public function handleCallback(Request $request)
    {
        $transactionId = $request->input('transaction_id');

        $response = $this->cinetPayService->checkPaymentStatus($transactionId);

        if ($response['code'] == '00') {
            // Paiement réussi, mettez à jour la base de données en conséquence
            return redirect()->route('admission.success');
        } else {
            return redirect()->route('admission.failure');
        }
    }
}
