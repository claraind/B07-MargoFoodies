<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateRestorannsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('restoranns',function(Blueprint $table){
            $table->increments("id");
            $table->string("nama");
            $table->string("telepon")->nullable();
            $table->string("lokasi")->nullable();
            $table->string("deskripsi")->nullable();
            $table->string("tax")->nullable();
            $table->string("rate")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restoranns');
    }

}