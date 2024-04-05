<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\OnlinePayment;
use App\Models\OnlineCustomer;
use App\Http\Controllers\Controller;

class OnlinePaymentController extends Controller
{
    public function index()
    {


        $allData = [
            'dataJoin' => OnlinePayment::getQueryJoin(),
            'dataCustomers' => OnlineCustomer::all(),
            'dataTickets' => Ticket::all(),
        ];
        return view('admin.online_payment.payment', $allData);
    }

    public function create_action(Request $request)
    {

        $token_payment = Str::random(13);
        $online_customer_id = $request->online_customer_id;
        $ticket_id = $request->ticket_id;
        $ticket_count = $request->ticket_count;
        $total_price = $request->total_price;

        $data = [
            'token_payment' => $token_payment,
            'online_customer_id' => $online_customer_id,
            'ticket_id' => $ticket_id,
            'ticket_count' => $ticket_count,
            'total_price' => $total_price
        ];

        OnlinePayment::create($data);
        toast('Berhasil Tambah Data', 'success');

        return redirect('/payment');
    }

    public function update_action(Request $request, $id)
    {

        $online_customer_id = $request->online_customer_id;
        $ticket_id = $request->ticket_id;
        $ticket_count = $request->ticket_count;
        $total_price = $request->total_price;

        $data = [
            'online_customer_id' => $online_customer_id,
            'ticket_id' => $ticket_id,
            'ticket_count' => $ticket_count,
            'total_price' => $total_price
        ];
        OnlinePayment::where('online_payment_id', $id)->update($data);
        toast('Berhasil Edit Data', 'success');

        return redirect('/payment');
    }

    public function delete_action($id)
    {
        OnlinePayment::where('online_payment_id', $id)->delete();
        toast('Berhasil Hapus Data', 'success');

        return redirect('/payment');
    }
}
