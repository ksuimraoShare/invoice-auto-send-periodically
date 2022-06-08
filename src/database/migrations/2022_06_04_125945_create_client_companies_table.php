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
        Schema::create('client_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('postal_code')->nullable();
            $table->string('prefecture')->nullable();
            $table->string('city')->nullable();
            $table->string('street_number')->nullable();
            $table->string('building_name')->nullable();
            $table->string('room_number')->nullable();
            $table->string('department_name')->nullable();
            $table->string('staff_name')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('client_companies');
    }
};
