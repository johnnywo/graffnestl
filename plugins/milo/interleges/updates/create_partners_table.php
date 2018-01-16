<?php namespace Milo\Interleges\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('milo_interleges_partners', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('company');
            $table->string('country');
            $table->string('continent');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('milo_interleges_partners');
    }
}
