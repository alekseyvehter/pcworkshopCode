<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('motherboard');
            $table->string('ram');
            $table->string('cooling');
            $table->string('hdd');
            $table->string('power');
            $table->string('body');
            $table->string('description');
            $table->string('price');
            $table->string('img');
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
        Schema::dropIfExists('computers');
    }
};
