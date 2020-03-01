<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')
            ->only(['index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return $this->showAll($products);
    }

}
