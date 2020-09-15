<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('merks')->insert([
      'name' => 'Samsung',
      'gambar' => 'bundesliga.png',
    ]);
    DB::table('merks')->insert([
      'name' => 'Xiomi',
      'gambar' => 'bundesliga.png',
    ]);
    DB::table('merks')->insert([
      'name' => 'Iphone',
      'gambar' => 'bundesliga.png',
    ]);
    DB::table('merks')->insert([
      'name' => 'Mito',
      'gambar' => 'bundesliga.png',
    ]);
  }
}
