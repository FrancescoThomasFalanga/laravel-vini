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
        Schema::create('wineries', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('address', 100);
            $table->string('town', 50);
            $table->string('district', 50);
            $table->string('region', 50);
            $table->string('nation', 50);
            $table->string('phone_number', 50);
            $table->string('mail', 100);

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
        Schema::dropIfExists('wineries');
    }
};
