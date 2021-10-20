<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;

class Noticia extends Model
{
    protected $fillable = ['user_id','category_id','titulo','texto','imagen'];  


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    


}
