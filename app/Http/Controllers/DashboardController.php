<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        toast('Selamat datang di halaman admin!', 'info');

        return view('admin.dashboard');
    }
}
