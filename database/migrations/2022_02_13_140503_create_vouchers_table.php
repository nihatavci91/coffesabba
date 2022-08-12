<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();

            // The voucher code
            $table->string('code')->index()->unique();

            // The human-readable voucher code name
            $table->string('name');

            // The description of the voucher - Not necessary
            $table->text('description')->nullable();

            // The number of uses currently
            $table->unsignedInteger('uses')->nullable();

            // The max uses this voucher has
            $table->unsignedInteger('max_uses')->nullable();

            // How many times a user can use this voucher.
            $table->unsignedInteger('max_uses_user')->nullable();

            // The type can be: first register, user only, product only
            $table->unsignedTinyInteger('type')->default(2);

            // The amount to discount by (in pennies) in this example.
            $table->unsignedInteger('discount_amount');

            // When the voucher begins
            $table->timestamp('starts_at')->default(now())->index();

            // When the voucher ends
            $table->timestamp('expires_at')->default(now())->index();

            // When the voucher ends
            $table->boolean('status')->default(1);

            // You know what this is...
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
        Schema::dropIfExists('vouchers');
    }
}
