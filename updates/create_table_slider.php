<?php namespace Lzodevelopement\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSliderTable extends Migration
{

    public function up()
    {
        Schema::create('lzodevelopement_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lzodevelopement_slider');
    }

}
