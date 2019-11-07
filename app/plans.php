<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    public $timestamps = false;
    protected $fillable =['name', 'brief_description', 'target_amount', 'end_date', 'user-id', 'balance'

];
}
