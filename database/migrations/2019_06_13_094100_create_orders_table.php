<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number')->unique()->comment('Номер заказа из системы 1С');
            $table->text('description')->comment('Описание заказа');
            $table->text('diagnostics')->nullable()->comment('Результат диагностики оборудования');
            $table->text('notice')->nullable()->comment('Примечание к заказу');
            $table->integer('master')->nullable()->comment('Мастер');
            $table->string('status')->default('В ремонте')->comment('Статус заказа');
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
        Schema::dropIfExists('orders');
    }
}
