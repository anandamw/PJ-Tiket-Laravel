<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\OfflineCustomer;
use App\Http\Controllers\Controller;

class OfflineCustomerController extends Controller
{

    public function index()
    {
        // $carbon = Carbon::now();
        // $carbon->setTimezone('Asia/Jakarta');
        // $data = $carbon->ToTimeString();
        $datas = [
            'ShowAllDataCustomers' => OfflineCustomer::all(),
            'title' => 'Customers'

        ];

        return view('admin.customers.customer', $datas);
    }

    public function create_action(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'jumlah_tiket' => 'required|integer',
            'whatsapp_number' => 'required|string',
            'address' => 'required|string',
        ]);

        $name = $request->name;
        $jumlah_tiket = $request->jumlah_tiket;
        $whatsapp_number = $request->whatsapp_number;
        $address = $request->address;
        $customer_code = Str::random('13');

        $createData = [
            'name' => $name,
            'jumlah_tiket' => $jumlah_tiket,
            'whatsapp_number' => $whatsapp_number,
            'address' => $address,
            'customer_code' => $customer_code
        ];

        OfflineCustomer::create($createData);
        toast('Berhasil Menambahkan Data', 'success');

        return redirect('/customer');
    }

    public function update_action(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'jumlah_tiket' => 'required|integer',
            'whatsapp_number' => 'required|string',
            'address' => 'required|string',
        ]);

        $name = $request->name;
        $jumlah_tiket = $request->jumlah_tiket;
        $whatsapp_number = $request->whatsapp_number;
        $address = $request->address;
        // $customer_code = Str::random('13');

        $updateData = [
            'name' => $name,
            'jumlah_tiket' => $jumlah_tiket,
            'whatsapp_number' => $whatsapp_number,
            'address' => $address,
            // 'customer_code' => $customer_code
        ];

        OfflineCustomer::where('customer_id', $id)->update($updateData);
        toast('Berhasil Edit Data', 'success');
        return redirect('/customer');
    }

    public function delete_action($id)
    {
        OfflineCustomer::where('customer_id', $id)->delete();
        toast('Berhasil Hapus Data', 'success');

        return redirect('/customer');
    }
}
