<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatepassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gatepasses', function (Blueprint $table) {
            $table->id();
            $table->string('GO');
            $table->string('PO');
            $table->date('tgl');
            $table->string('trans_agent');
            $table->string('truck');
            $table->string('despatch_spv')->nullable();
            $table->string('despatch_manag')->nullable();
            $table->string('authorized_sign')->nullable();
            $table->string('despatch_security')->nullable();
            $table->enum('status', ['0', '1', '2', '3', '4']);
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
        Schema::dropIfExists('gatepasses');
    }
}
