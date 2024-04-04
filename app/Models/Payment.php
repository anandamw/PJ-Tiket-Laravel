<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = ['payment_id'];
    protected $table = 'payments';

    public static function getQueryJoin()
    {
        $queryJoin = DB::table('payments')
            ->join('customers', 'payments.customer_id', '=', 'customers.customer_id')
            ->join('tickets', 'payments.ticket_id', '=', 'tickets.ticket_id')->get();

        return $queryJoin;
    }
}
