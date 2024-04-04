<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $allData = [
            'dataJoin' => Payment::getQueryJoin(),
            'dataCustomers' => Customer::all(),
            'dataTickets' => Ticket::all()
        ];
        return view('admin.payment.payment', $allData);
    }

    public function create_action(Request $request)
    {
        $customer_id = $request->customer_id;
        $ticket_id = $request->ticket_id;
        $payment_code = $request->payment_code;
        $price = $request->price;

        $data = [
            'customer_id' => $customer_id,
            'ticket_id' => $ticket_id,
            'payment_code' => $payment_code,
            'price' => $price
        ];

        Payment::create($data);
        toast('Berhasil Tambah Data', 'success');

        return redirect('/payment');
    }

    public function update_action(Request $request, $id)
    {

        $customer_id = $request->customer_id;
        $ticket_id = $request->ticket_id;
        $payment_code = $request->payment_code;
        $price = $request->price;


        $data = [
            'customer_id' => $customer_id,
            'ticket_id' => $ticket_id,
            'payment_code' => $payment_code,
            'price' => $price
        ];
        Payment::where('payment_id', $id)->update($data);
        toast('Berhasil Edit Data', 'success');

        return redirect('/payment');
    }

    public function delete_action($id)
    {
        Payment::where('payment_id', $id)->delete();
        toast('Berhasil Hapus Data', 'success');

        return redirect('/payment');
    }
}
