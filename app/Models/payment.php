<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public $timestamps = false;

    protected $table = 'payment';
    use HasFactory;
}
