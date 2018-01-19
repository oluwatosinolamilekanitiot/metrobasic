<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    //
    // $count = Surat::count();
// return View::make('index')->with('count', $count);
public function hasUnread(){
    return (bool)$this->conversations()->whereOpened(0)->count();
}
}
