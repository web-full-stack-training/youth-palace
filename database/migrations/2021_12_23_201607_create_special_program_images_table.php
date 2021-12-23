<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialProgramImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_program_images', function (Blueprint $table) {
            $table->id();
            $table->text('image_path1');
            $table->text('image_path2');
            $table->text('image_path3');
            $table->text('image_path4');
            $table->text('image_path5');
            $table->text('image_path6');
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
        Schema::dropIfExists('special_program_images');
    }
}
