<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = 
    [
        'name',
        'email',
        'subject',
        'message'
    ];

    public function user()
    {
        return $this->hasMany('App\User');

    }
}
