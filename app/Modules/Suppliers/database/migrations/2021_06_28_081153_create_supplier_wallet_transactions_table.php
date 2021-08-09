<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierWalletTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id');
            $table->foreignId('supplier_wallet_id');
            $table->string('reason');
            $table->date('date');
            $table->string('supplier_wallet_transactionable_type');
            $table->bigInteger('supplier_wallet_transactionable_id');
            $table->date('transaction_date');
            $table->boolean('transaction_status');
            $table->double('amount');
            $table->string('slug');
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
        Schema::dropIfExists('supplier_wallet_transactions');
    }
}
