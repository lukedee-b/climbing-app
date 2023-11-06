<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes1 = new Route;
        $routes1->grade = "The Wall";
        $routes1->county = "Sandyford";
        $routes1->description = "10";
        $routes1->style = "15";
        $routes1->save();
    }
}
