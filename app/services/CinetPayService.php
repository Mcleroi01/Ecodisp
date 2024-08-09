<?php


namespace App\Services;

use GuzzleHttp\Client;

class CinetPayService
{
    protected $client;
    protected $apiKey;
    protected $siteId;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.cinetpay.api_key');
        $this->siteId = config('services.cinetpay.site_id');
        $this->baseUrl = config('services.cinetpay.base_url');
    }

    public function initiatePayment($transactionId, $amount, $currency, $description, $returnUrl)
    {
        $response = $this->client->post($this->baseUrl . 'payment', [
            'json' => [
                'apikey' => $this->apiKey,
                'site_id' => $this->siteId,
                'transaction_id' => $transactionId,
                'amount' => $amount,
                'currency' => $currency,
                'description' => $description,
                'return_url' => $returnUrl
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function checkPaymentStatus($transactionId)
    {
        $response = $this->client->post($this->baseUrl . 'check-payment', [
            'json' => [
                'apikey' => $this->apiKey,
                'site_id' => $this->siteId,
                'transaction_id' => $transactionId
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
