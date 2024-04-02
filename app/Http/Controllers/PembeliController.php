<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        return view('admin.konsumen');
    }

    public function create_action()
    {
        return redirect('/konsumen');
    }
}
