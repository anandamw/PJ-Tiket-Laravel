<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $showAll = [
            'totalCustomer' => Customer::count(),

        ];

        toast('Selamat datang di halaman admin!', 'info');
        return view('admin.dashboard', $showAll);
    }
}
