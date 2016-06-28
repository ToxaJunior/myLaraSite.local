<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'rem_img';
    protected $fillable = array('category', 'img');
    public $timestamps = false;
}
