<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Recipe extends Eloquent
{
    use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $guarded = [];

}
