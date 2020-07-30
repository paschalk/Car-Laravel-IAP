<?php

use Illuminate\Database\Seeder;
use App/Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $car = new Car;
        $car->make="Toyota";
        $car->model="vanguard";
        $car->produced_on="2019-04-18";
        $car->save();
    }
}
