<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    {
        factory(Employee::class, 100) -> make() 
            -> each(function($employees) {

            $location = Location::inRandomOrder() -> first();
            $employees -> location() -> associate($location);
            $employees -> save();
        });
    }
}
