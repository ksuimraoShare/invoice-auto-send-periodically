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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_send_date');
            $table->string('project_name');
            $table->tinyInteger('transfer_deadline');
            $table->string('bank_name')->nullable();
            $table->string('account_type')->nullable();
            $table->string('branch_name')->nullable();
            $table->integer('account_number')->nullable();
            $table->integer('branch_number')->nullable();
            $table->string('account_name')->nullable();
            $table->integer('invoice_number')->nullable();
            $table->string('remarks')->nullable();
            $table->integer('subtotal_price')->nullable();
            $table->integer('sales_tax_price')->nullable();
            $table->integer('total_price')->nullable();
            $table->boolean('complete_send_invoice_flag')->default(0);
            $table->bigInteger('client_company_id')->unsigned();
            $table->foreign('client_company_id')
            ->references('id')
            ->on('client_companies')
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
        Schema::dropIfExists('invoices');
    }
};
