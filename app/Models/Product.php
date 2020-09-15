<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  public function merk()
  {
    return $this->belongsTo(Merk::class, 'merk_id', 'id');
  }

  public function pesanandetails()
  {
    return $this->hasMany(PesananDetail::class, 'product_id', 'id');
  }
}
