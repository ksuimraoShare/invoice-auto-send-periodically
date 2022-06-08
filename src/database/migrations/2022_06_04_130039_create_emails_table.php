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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('title')->nullable();;
            $table->string('receiver_email_address');
            $table->text('body_text')->nullable();;
            $table->bigInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')
            ->references('id')
            ->on('invoices')
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
        Schema::dropIfExists('emails');
    }
};
