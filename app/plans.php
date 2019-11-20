<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    // public $timestamps = false;
    protected $fillable =['name', 'brief_description', 'target_amount', 'end_date', 'user_id', 'balance'];
       
}
