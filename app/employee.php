<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable=['name', 'adress', 'phone', 'salary'];
}
