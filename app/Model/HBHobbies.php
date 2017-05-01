<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HBHobbies extends MHBCoreModel
{
    protected $table = 'hb_hobbies';

    protected $fillable = ['name'];
}
