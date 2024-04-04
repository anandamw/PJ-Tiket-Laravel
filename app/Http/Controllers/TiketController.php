<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $showTiket = Ticket::all();
        return view('admin.tiket.tiket', compact('showTiket'));
    }

    public function create_action(Request $request)
    {
        $ticket_code = Str::random('13');
        $category = $request->category;

        $dataTicket = [
            'ticket_code' => $ticket_code,
            'category' => $category
        ];

        Ticket::create($dataTicket);
        return redirect('tiket');
    }
    public function update_action(Request $request, $id)
    {
        // $ticket_code = Str::random('13');
        $category = $request->category;

        $dataTicket = [
            // 'ticket_code' => $ticket_code,
            'category' => $category
        ];

        Ticket::where('ticket_id', $id)->update($dataTicket);
        return redirect('tiket');
    }
    public function delete_action($id)
    {
        Ticket::where('ticket_id', $id)->delete();
        return redirect('tiket');
    }
}
