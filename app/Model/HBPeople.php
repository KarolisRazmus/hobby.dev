<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HBPeople extends HBCoreModel
{
    protected $table = 'hb_people';

    protected $fillable = ['hb_cities_id', 'name', 'email', 'phone'];

    public function connection (  )
    {
        return $this->belongsToMany(HBHobbies::class, 'hb_people_hobbies_connections', 'people_id', 'hobbies_id');
    }
}
