<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Kada pravimo jedan post,ima id,naslov,i telo i dve kolone od timestamps (jedna kad je kreirano jedna kad je update uradjen)
        */
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');                            //naslov posta
            $table->mediumText('body');                         //malo veci tekst za telo posta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   //Ako brisemo post,sve neka obrise,tj citav
        Schema::dropIfExists('posts');
    }
}
