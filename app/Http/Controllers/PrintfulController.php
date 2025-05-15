<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\PrintfulService;

class PrintfulController extends Controller
{
    protected $printfulService;

    public function __construct(PrintfulService $printfulService)
    {
        $this->printfulService = $printfulService;
    }

    // Get all Printful products
    public function listProducts()
    {
        $products = $this->printfulService->getProducts();
        $products = $products['result'];
        return response()->json($products);
    }

    // Get a specific product
    public function showProduct($id)
    {
        $product = $this->printfulService->getProduct($id);
        return response()->json($product);
    }

    // Place an order on Printful
    public function placeOrder(Request $request)
    {
        $orderData = $request->all();
        $order = $this->printfulService->createOrder($orderData);
        return response()->json($order);
    }
}
