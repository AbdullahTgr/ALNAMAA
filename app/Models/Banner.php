<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','order','description','title-ar','description-ar','title-fr','description-fr','photo','status'];
}
