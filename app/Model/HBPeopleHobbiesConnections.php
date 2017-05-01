<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HBPeopleHobbiesConnections extends HBCoreModel
{
    protected $table = 'hb_people_hobbies_connections';

    protected $fillable =['people_id', 'hobbies_id'];

}
