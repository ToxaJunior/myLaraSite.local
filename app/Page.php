<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'rem_content';
    protected $dateFormat = 'U';
    protected $fillable = array('category_id', 'title', 'article', 'preview', 'img_preview');

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
