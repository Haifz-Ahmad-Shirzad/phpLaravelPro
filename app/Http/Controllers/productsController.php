<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    //


    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function show(string $id)
    {
        return view('products.show');
    }

    public function edit(string $id)
    {
        return view('products.edit');
    }
}
