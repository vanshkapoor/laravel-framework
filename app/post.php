<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //by default a table is formed by name post
    //to give a table name yourself
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //tmestamps
    //public $timestamps = true;
}
