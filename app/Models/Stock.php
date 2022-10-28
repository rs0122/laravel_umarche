<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;

class Stock extends Model
{
    use HasFactory;

    protected $table = 't_stocks';
}
