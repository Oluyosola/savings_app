<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funds extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'select_plan', 'amount'];
}
