<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executed extends Model
{
    use HasFactory;

    protected $table = 'executed';

    protected $fillable = [
        'total_orders',
        'total_cost',
    ];
}