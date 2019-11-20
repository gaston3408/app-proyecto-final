<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Event;

class Comment extends Model
{
    protected $fillable = ['id','comment','assesment','date_time','user_id','event_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

}
