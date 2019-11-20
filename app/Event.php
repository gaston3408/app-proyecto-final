<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Event extends Model
{
    use softDeletes;

    protected $fillable = ['id','title','date_time','place','description','large_description','capacity','price'];

    public function users(){
        return $this->belongsToMany(User::class); 
    }
}
