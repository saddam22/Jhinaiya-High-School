<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
        protected $fillable = ['MenuName'];

    public function sub_categories(){
        return $this->hasMany('App\SubCategory');
    }
}
