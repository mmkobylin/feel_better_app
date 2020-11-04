<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeavyliftersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heavylifters', function (Blueprint $table) {
            $table->id();
            $table->text('idea1')->nullable();
            $table->text('idea2');
            $table->text('idea3')->nullable();
            $table->text('idea4')->nullable();
            $table->text('idea5')->nullable();
            $table->text('idea6')->nullable();
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
        Schema::dropIfExists('heavylifters');
    }
}
