<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HBPeople extends HBCoreModel
{
    protected $table = 'hb_people';

    protected $fillable = ['hb_cities_id', 'name', 'email', 'phone'];
}
