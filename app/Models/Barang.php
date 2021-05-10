<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public function kios()
    {
        return $this->belongsTo(Kios::class);
    }
    protected $guarded = [

    ];

}

