<?php

namespace App\Http\Livewire;

use App\Models\Merk;
use Livewire\Component;

class Navbar extends Component
{
  public function render()
  {
    return view('livewire.navbar', [
      'merks' => Merk::all(),
    ]);
  }
}
