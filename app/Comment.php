<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Comment extends Model
{
    protected $fillable = ['id','comment','assesment','date_time','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
