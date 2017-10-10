<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookbookDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookbook_designers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 100);
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 50);
            $table->string('cover', 250);
            $table->string('image', 250);
            $table->string('url', 250);
            $table->string('retail', 250);
            $table->string('facebook', 100);
            $table->string('pinterest', 100);
            $table->string('twitter', 100);
            $table->string('instagram', 100);
            $table->text('description');
            $table->boolean('featured');
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
        Schema::dropIfExists('lookbook_designers');
    }
}
