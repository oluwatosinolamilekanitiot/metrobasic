<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    'title',
    'file',
    'body'
    
    ];

        // public $inbox = null ;
        // public $totalinbox = 0;
        // public $totalanswer = 0;

        // public function __construct ($reply)
        // {
        //     if($reply)    
        //     $this->items =$reply->items;
        //     $this->inbox =$reply->inbox;
        //     $this->totalanwser = $inbox->totalanwser;
        // }
        // public function add($items,$id){
        //     $storemessage =['inbox'=> 0, 'messages'=>$answers->messages, 'answers'=>$answers];
        //     if($this->answers)
        //     {
        //         if(array_key_exists){
        //             $storemessage = $this->inbox[$id];
        //         }
        //     }

        //     $storemessage['inbox']++;
        //     $storemessage['messages']= $answers->messages * $storemessage ['inbox'];
        //     $this->answer[$id] = $storemessage;
        //     $this->inbox++;
        //     $this->totalanswer += $answers->messages;            
        // }

     public function user()
    {
        return $this->belongsTo('App\User');

    }

    public function pin()
    {
        return $this->belongsTo('App\Pin');

    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

