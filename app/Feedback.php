<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'rem_message';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $fillable = array('name', 'email', 'tel', 'message');
}
