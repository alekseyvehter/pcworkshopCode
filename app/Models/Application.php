<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_client',
        'phone_number_client',
        'budget_client',
        'purpose_client',
        'wishes_client',
    ];
}
