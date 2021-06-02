<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Task extends Model
{
    protected $fillable = [

        'name'
    ];


    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
