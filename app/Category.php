<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'article_category';
    public $timestamps = false;
    protected $fillable = array('id', 'parent_id', 'name');
}
