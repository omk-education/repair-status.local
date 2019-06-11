<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Ф.И.О. пользователя');
            $table->string('email')->unique()->comment('Электронная почта');
            $table->timestamp('email_verified_at')->nullable()->comment('Дата подтверждения почты');
            $table->string('password')->comment('Пароль пользователя');
            $table->string('role')->default('user')->comment('Роль пользователя в бизнес-процессе');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
