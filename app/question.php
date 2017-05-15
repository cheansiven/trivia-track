<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'question';
    protected $fillable  = ['content', 'category_id'];
}
