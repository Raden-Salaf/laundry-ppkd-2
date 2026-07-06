<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TransLaundryPickup extends Model
{
    use HasFactory;

    protected $table = 'trans_laundry_pickup';

    protected $fillable =
    [
        'id_order',
        'id_customer',
        'pickup_date',
        'notes',
    ];
}
