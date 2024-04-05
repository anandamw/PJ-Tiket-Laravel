<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\OnlineCustomer;
use App\Http\Controllers\Controller;

class OnlineCustomerController extends Controller
{

    public function index()
    {
        // $carbon = Carbon::now();
        // $carbon->setTimezone('Asia/Jakarta');
        // $data = $carbon->ToTimeString();
        $datas = [
            'ShowAllDataCustomers' => OnlineCustomer::all(),
            'title' => 'Customers'

        ];

        return view('admin.online_customers.customer', $datas);
    }

    public function create_action(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'whatsapp_number' => 'required|string',
            'address' => 'required|string',
        ]);

        $online_code = Str::random('13');
        $name = $request->name;
        $whatsapp_number = $request->whatsapp_number;
        $address = $request->address;

        $createData = [
            'online_code' => $online_code,
            'name' => $name,
            'whatsapp_number' => $whatsapp_number,
            'address' => $address,
        ];

        OnlineCustomer::create($createData);
        toast('Berhasil Menambahkan Data', 'success');

        return redirect('/customer');
    }

    public function update_action(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'whatsapp_number' => 'required|string',
            'address' => 'required|string',
        ]);

        $name = $request->name;
        $whatsapp_number = $request->whatsapp_number;
        $address = $request->address;
        // $online_code = Str::random('13');

        $updateData = [
            'name' => $name,
            'whatsapp_number' => $whatsapp_number,
            'address' => $address,
            // 'online_code' => $online_code
        ];

        OnlineCustomer::where('id', $id)->update($updateData);
        toast('Berhasil Edit Data', 'success');
        return redirect('/customer');
    }

    public function delete_action($id)
    {
        OnlineCustomer::where('id', $id)->delete();
        toast('Berhasil Hapus Data', 'success');
        return redirect('/customer');
    }
}
