<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderReadyModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer_id',
        'name',
        'city',
        'phone_number',
        'comment',
    ];
}
