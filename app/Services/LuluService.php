<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LuluService
{
    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;
    protected $accessToken;


    public function __construct()
    {
        $this->clientId = config('services.lulu.client_id');
        $this->clientSecret = config('services.lulu.client_secret');
        $this->baseUrl = config('services.lulu.base_url');
        $this->accessToken = $this->getAccessToken();
    }


    private function getAccessToken()
    {
        $response = Http::asForm()->post($this->baseUrl . '/auth/realms/glasstree/protocol/openid-connect/token', [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        return $response->json()['access_token'] ?? null;
    }


    public function getProducts()
    {
        $response = Http::withToken($this->accessToken)
            ->get($this->baseUrl . '/print-jobs/quote');

        return $response->json();
    }

    public function createOrder($orderData)
    {
        $response = Http::withToken($this->accessToken)
            ->post($this->baseUrl . '/print-jobs/', $orderData);

        return $response->json();
    }
}
