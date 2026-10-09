<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function create()
    {
        return view('services.create');
    }

    public function show(string $id)
    {
        return view('services.show');
    }

    public function edit(string $id)
    {
        return view('services.edit');
    }
}