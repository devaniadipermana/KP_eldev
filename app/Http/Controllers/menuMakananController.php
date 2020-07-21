<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuMakananController extends Controller
{
    public function index()
    {
        return view('admin.menuMakanan.index');
    }
}
