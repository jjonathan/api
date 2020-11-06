<?php

namespace App\Domains\Location\Models;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'location';

    protected $fillable = ['user_id', 'lat', 'lon'];
}
