<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PrintfulService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.printful.api_key');
        $this->baseUrl = config('services.printful.base_url');
    }

    // Fetch product catalog
    public function getProducts()
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->baseUrl . 'products');

        return $response->json();
    }




    public function getSyncedProducts()
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->baseUrl . 'sync/products');

        return $response->json();
    }

    // Get specific product details
    public function getProduct($id)
    {
        $response = Http::withToken($this->apiKey)
            ->get($this->baseUrl . "products/{$id}");

        return $response->json();
    }

    // Create an order on Printful
    public function createOrder($orderData)
    {
        $response = Http::withToken($this->apiKey)
            ->post($this->baseUrl . 'orders', $orderData);

        return $response->json();
    }
}
