<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IngramSparkService;
use Illuminate\Support\Facades\Http;


class IngramSparkController extends Controller
{

    protected $ingramService;

    public function __construct(IngramSparkService $ingramService)
    {
        $this->ingramService = $ingramService;
    }

    public function getBooks()
    {
        $response = Http::withToken($this->ingramService->getToken())
            ->get(config('services.ingram.base_url') . '/api/books');

        return response()->json($response->json());
    }
}
