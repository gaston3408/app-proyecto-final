<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use softDeletes;

    protected $fillable = ['id','title','date_time','place','description','large_description','capacity','price'];
}
