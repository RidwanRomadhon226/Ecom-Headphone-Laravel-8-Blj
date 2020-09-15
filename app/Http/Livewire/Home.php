<?php

namespace App\Http\Livewire;

use App\Models\Merk;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
  public function render()
  {

    $merks = Merk::all();

    return view('livewire.home', [
      'products' => Product::take(4)->get(),
      'merks' => $merks
    ])
      ->extends('layouts.app')
      ->section('body');
  }
}
