<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addtocart extends Model
{
    protected $primaryKey = 'addtocart_id';
    public $timestamps = false;
    protected $table='addtocarts';
    use HasFactory;
}


