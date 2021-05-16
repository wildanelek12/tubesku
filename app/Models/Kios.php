<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kios extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function pembayarans () {
      return $this->hasMany(Pembayaran::class);
    }

    public function barangs () {
      return $this->hasMany(Barang::class);
    }

    public function user () {
      return $this->belongsTo(User::class);
    }
}
