<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasparvaldesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasparvaldes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');      ///saīsinājums
            $table->text('title');      ///pilnais nosaukums
            $table->text('adress');     ///adrese
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
        Schema::dropIfExists('pasparvaldes');
    }
}
