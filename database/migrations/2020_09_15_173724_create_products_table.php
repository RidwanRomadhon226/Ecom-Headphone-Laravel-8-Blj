<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->integer('harga')->default('2000000');
      $table->integer('merk_id');
      $table->integer('harga_nameset')->default('2000500');
      $table->boolean('is_ready')->default(true);
      $table->string('jenis')->default('Original');
      $table->string('berat')->default('0.25');
      $table->string('gambar');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
