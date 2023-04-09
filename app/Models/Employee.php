<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

protected $fillable = ['nom','phone'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }



    use HasFactory;
}
