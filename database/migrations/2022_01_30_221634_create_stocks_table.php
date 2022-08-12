<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->enum('weight', ['250', '500', '750', '1000']);
            // ? $table->enum('roasting', ['filter', 'espresso']);
            $table->float('price');
            $table->unsignedTinyInteger('quantity');
            $table->timestamps();

            $table->index(['product_id', 'weight'], 'stocks_product_id_weight_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
