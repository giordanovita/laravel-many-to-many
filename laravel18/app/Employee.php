<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;
use App\Task;

class Employee extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'location_id'
    ];

    public function location()
    {
        return $this -> belongsTo(Location::class);   
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
