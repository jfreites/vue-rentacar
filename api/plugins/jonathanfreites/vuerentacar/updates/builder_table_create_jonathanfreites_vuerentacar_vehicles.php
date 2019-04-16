<?php namespace JonathanFreites\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJonathanfreitesVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::create('jonathanfreites_vuerentacar_vehicles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jonathanfreites_vuerentacar_vehicles');
    }
}
