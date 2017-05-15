<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table = 'answer';
    protected $fillable  = ['content', 'correct', 'question_id'];
}
