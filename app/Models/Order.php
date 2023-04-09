<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['employeeId','ClientId','TotalePrice','paymentType','status'];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function empolyee()
    {
        return $this->belongsTo(empolyee::class);
    }




    use HasFactory;
}
