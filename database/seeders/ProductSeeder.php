<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('products')->insert([
      'nama' => 'Xiaomi Redmi 9A',
      'merk_id' => 2,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Xiaomi Redmi 9C',
      'merk_id' => 2,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Xiaomi POCO X3 NFC',
      'merk_id' => 2,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Samsung Galaxy A10',
      'merk_id' => 1,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Samsung Galaxy A11',
      'merk_id' => 1,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Samsung Galaxy A30s',
      'merk_id' => 1,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Apple iPhone X',
      'merk_id' => 3,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Apple iPhone 8',
      'merk_id' => 3,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Mito Sprint A19 ',
      'merk_id' => 4,
      'gambar' => 'chelsea.png'
    ]);
    DB::table('products')->insert([
      'nama' => 'Mito Fantasy X A17 ',
      'merk_id' => 4,
      'gambar' => 'chelsea.png'
    ]);
  }
}
