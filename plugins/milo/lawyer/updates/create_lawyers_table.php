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
            $table->string('address')->default('Kärntner Ring 4, A-1010 Wien');
            $table->string('phone')->default('+43 1 533 66 61-0');
            $table->string('mobil');
            $table->string('fax')->default('+43 1 533 66 61-10');
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
