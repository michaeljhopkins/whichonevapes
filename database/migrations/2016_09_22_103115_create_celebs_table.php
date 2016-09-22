<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('img')->nullable();
            $table->integer('score')->default(0);
            $table->integer('elo')->default(0);
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
        Schema::drop('celebs');
    }
}
