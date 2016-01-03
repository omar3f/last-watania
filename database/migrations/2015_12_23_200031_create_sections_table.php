<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('description');
            $table->text('image');
            $table->boolean('home');
            $table->integer('page_id')->unsigned();
            $table->integer('parent_id');
            $table->timestamps();
        });

        Schema::table('sections', function (Blueprint $table) {
//            $table->foreign('page_id')->references('id')->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sections');
    }
}
