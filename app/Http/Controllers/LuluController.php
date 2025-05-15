<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LuluService;

class LuluController extends Controller
{
    protected $luluService;

    public function __construct(LuluService $luluService)
    {
        $this->luluService = $luluService;
    }


    public function listProducts()
    {
        $products = $this->luluService->getProducts();
        return response()->json($products);
        // return dd($products);
    }


    public function placeOrder(Request $request)
    {
        $orderData = $request->all();
        $order = $this->luluService->createOrder($orderData);
        return response()->json($order);
        // return dd($order);
    }
}


// 127.0.0.1:8000/lulu/products