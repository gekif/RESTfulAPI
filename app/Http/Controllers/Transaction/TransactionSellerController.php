<?php

namespace App\Http\Controllers;

use App\Transaction;

class TransactionSellerController extends ApiController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('scope:read-general')
            ->only('index');

        $this->middleware('can:view,transaction')
            ->only('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {
        $seller = $transaction->product->seller;

        return $this->showOne($seller);
    }

}