<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function show(string $id)
    {
        return view('blog.show');
    }

    public function edit(string $id)
    {
        return view('blog.edit');
    }
}
