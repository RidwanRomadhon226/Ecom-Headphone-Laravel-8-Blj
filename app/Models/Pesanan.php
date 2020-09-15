<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
  use HasFactory;

  public function pesanan_delails()
  {
    return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
  }

  public function users()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
}
