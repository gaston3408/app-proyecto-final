<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Comment;

class Event extends Model
{
    use softDeletes;

    protected $fillable = ['id','title','date_time','place','description','large_description','capacity','price'];

    public function users(){
        return $this->belongsToMany(User::class); 
    }
    public function commentsOfEvent(){
        return $this->hasMany(Comment::class);
    }
}
