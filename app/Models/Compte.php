<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable =['status'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    use HasFactory;
}
