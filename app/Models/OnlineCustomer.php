<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCustomer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'online_customers';
}
