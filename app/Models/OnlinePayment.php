<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OnlinePayment extends Model
{
    use HasFactory;
    protected $guarded = ['online_payment_id'];
    protected $table = 'online_payments';

    public static function getQueryJoin()
    {
        $queryJoin = DB::table('online_payments')
            ->join('online_customers', 'online_payments.online_customer_id', '=', 'online_customers.id')
            ->join('tickets', 'online_payments.ticket_id', '=', 'tickets.id')->get();

        return $queryJoin;
    }
}
