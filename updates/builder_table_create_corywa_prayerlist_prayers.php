<?php namespace Corywa\Prayerlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorywaPrayerlistPrayers extends Migration
{
    public function up()
    {
        Schema::create('corywa_prayerlist_prayers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('short_desc')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corywa_prayerlist_prayers');
    }
}
