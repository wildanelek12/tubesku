<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Kios extends Authenticatable
{
    use HasFactory;

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
    protected $guarded = [

    ];

}
