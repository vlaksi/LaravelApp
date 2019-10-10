<?php

namespace App;                          //model se zove App

use Illuminate\Database\Eloquent\Model;

class Post extends Model                //Naslov mu je Post
{   //ovako zelimo da izgleda nas model ,imamo neke po difoltu stvari ali ovo zelimo dodatno
    //Ime tabele
    protected $table ='posts';
    //primarni kljuc
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps =true;

    //kreiranje relacije
    public function user(){
        return $this->belongsTo('App\User');        //svaki post pripada nekom useru
    }
}
