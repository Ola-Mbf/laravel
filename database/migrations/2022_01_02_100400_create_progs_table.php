<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('company')->nullable();
            $table->string('version')->nullable();
            $table->text('description')->nullable();
            $table->text('URL')->nullable();
            $table->double('size')->nullable();
            $table->string('image')->nullable();
            //$table->bigInteger('os_id')->unsigned();
            $table->bigInteger('category_id')->unsigned()->nullable();
            //$table->bigInteger('type_id')->unsigned();
            //$table->bigInteger('coretype_id')->unsigned();
            //$table->bigInteger('lisence_id')->unsigned();
            $table->enum('operting_system' , ["Windows" , "Linux" , "Mac", "Android" , "Ios"])->default('Windows');
            $table->enum('type' , ["Program" , "App"])->default('Program');
            $table->enum('coretype' , ["32bit" , "64bit" , "None"])->default('32bit');
            $table->enum('lisence' , ["Free" , "Monthly" , "Quarterly" , "Semi-annual" , "annual"])->default('Free');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('progs');
    }
}
