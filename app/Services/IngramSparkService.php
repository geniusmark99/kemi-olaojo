<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class IngramSparkService
{
    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;
    protected $token;


    protected function __construct()
    {

        $this->clientId = config('services.ingram.client_id');
        $this->clientSecret = config('services.ingram.client_secret');
        $this->baseUrl = config('services.ingram.base_url');
        $this->authenticate();
    }

    public function authenticate()
    {
        $response = Http::asForm()->post("{$this->baseUrl}/oauth/token", [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        if ($response->successful()) {
            $this->token = $response->json()['access_token'];
        } else {
            throw new \Exception('Authentication failed: ' . $response->body());
        }
    }



    public function getToken()
    {
        return $this->token;
    }
}
