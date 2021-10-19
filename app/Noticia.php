<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Noticia extends Model
{
    protected $fillable = ['user_id','titulo','texto','imagen'];  


    public function user(){

        return $this->belongsTo(User::class);
    }
    


}
