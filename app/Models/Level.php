<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'level';

    protected $fillable = [
        'level_name',
    ];

    // Relasi: satu level dapat dimiliki oleh banyak user
    public function users()
    {
        return $this->hasMany(User::class, 'id_level');
    }
}
