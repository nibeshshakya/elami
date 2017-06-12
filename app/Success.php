<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
    //
    protected $table= "successstory";

    protected $fillable = [
        'name',
        'email',
        'message',
        'phone',
        'picture'

    ];
}
