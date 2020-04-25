<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    protected $fillable = ['id', 'pm_obs', 'pm_min', 'pm_max', 'aqi_min', 'aqi_max'];
}
