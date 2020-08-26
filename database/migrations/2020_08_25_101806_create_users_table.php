<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name',80)->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('password',15)->nullable();
            $table->string('email',80)->nullable()->unique();
            $table->string('link_slack')->nullable()->unique();
            $table->string('link_facebook')->nullable()->unique();
            $table->string('introduction')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
