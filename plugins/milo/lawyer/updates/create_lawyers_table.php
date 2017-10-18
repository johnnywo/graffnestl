<?php namespace Milo\Lawyer\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLawyersTable extends Migration
{
    public function up()
    {
        Schema::create('milo_lawyer_lawyers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('jobtitle');
            $table->string('address');
            $table->string('phone');
            $table->string('mobil');
            $table->string('fax');
            $table->string('email');
            $table->string('relation');
            $table->text('focus_short');
            $table->text('focus');
            $table->text('experience');
            $table->text('education');
            $table->string('languages');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('milo_lawyer_lawyers');
    }
}
