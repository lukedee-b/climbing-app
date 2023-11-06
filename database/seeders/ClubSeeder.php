<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs1 = new Club;
        $clubs1->name = "The Wall";
        $clubs1->location = "Sandyford";
        $clubs1->number_of_walls = "10";
        $clubs1->price = "15";
        $clubs1->facilities = "Weights, Showers, Campus board";
        $clubs1->cafe = "Yes";
        $clubs1->save();
        
        $clubs2 = new Club;
        $clubs2->name = "Dublin Climbing Center";
        $clubs2->location = "Tallaght";
        $clubs2->number_of_walls = "2";
        $clubs2->price = "11";
        $clubs2->facilities = "Weights, Showers, Lead wall";
        $clubs2->cafe = "Yes";
        $clubs2->save();

        $clubs3 = new Club;
        $clubs3->name = "Awsome Walls";
        $clubs3->location = "Kildonan";
        $clubs3->number_of_walls = "9";
        $clubs3->price = "13";
        $clubs3->facilities = "Showers, Campus board, Lead wall";
        $clubs3->cafe = "No";
        $clubs3->save();
        
        $clubs4 = new Club;
        $clubs4->name = "Gravity";
        $clubs4->location = "Inshicore";
        $clubs4->number_of_walls = "4";
        $clubs4->price = "11";
        $clubs4->facilities = "Showers, Campus board, ";
        $clubs4->cafe = "Yes";
        $clubs4->save();

        $clubs5 = new Club;
        $clubs5->name = "Bloc";
        $clubs5->location = "Ballyfermot";
        $clubs5->number_of_walls = "17";
        $clubs5->price = "15";
        $clubs5->facilities = "Showers, Campus board, Weights, Training area";
        $clubs5->cafe = "Yes";
        $clubs5->save();


    }
}
