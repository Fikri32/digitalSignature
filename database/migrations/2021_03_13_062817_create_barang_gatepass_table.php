<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangGatepassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_gatepass', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gatepass_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('quantity');
            $table->string('remarks');
            $table->foreign('gatepass_id')->references('id')->on('gatepasses')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
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
        Schema::dropIfExists('gate_barang');
    }
}
