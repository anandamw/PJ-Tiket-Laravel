<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index()
    {
        $enum = [
            'vip',
            'economy'
        ];

        $showTiket = Ticket::all();
        $getPriceTiket = DB::table('tickets')->select('ticket_price')->first();
        $numerik = $getPriceTiket ? $getPriceTiket->ticket_price : 0;
        $showRupiah = number_format($numerik, 0, ',', '.');
        return view('admin.tiket.tiket', compact('showTiket', 'showRupiah', 'enum'));
    }




    public function create_action(Request $request)
    {
        // dd($request->all());
        // die();

        $ticket_code = Str::random(13);
        $category_ticket = $request->category_ticket;
        $ticket_price = $request->ticket_price;
        $format_price = str_replace([',', '.'], '', $ticket_price);

        $dataTicket = [
            'ticket_code' => $ticket_code,
            'category_ticket' => $category_ticket,
            'ticket_price' => $format_price
        ];

        Ticket::create($dataTicket);
        return redirect('tiket');
    }
    public function update_action(Request $request, $id)
    {
        $category_ticket = $request->category_ticket;
        $ticket_price = $request->ticket_price;
        $format_price = str_replace([',', '.'], '', $ticket_price);

        $dataTicket = [
            'category_ticket' => $category_ticket,
            'ticket_price' => $format_price
        ];

        Ticket::where('id', $id)->update($dataTicket);
        return redirect('tiket');
    }
    public function delete_action($id)
    {
        Ticket::where('id', $id)->delete();
        return redirect('tiket');
    }
}
