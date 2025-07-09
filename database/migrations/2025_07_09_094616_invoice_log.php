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
        Schema::create('invoice_log', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('email');
            $table->string('item');
            $table->string('description')->nullable();
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->decimal('tax', 5, 2);
            $table->decimal('subtotoal', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('total_amount', 10, 2);
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
        Schema::dropIfExists('invoice_log');
    }
};
