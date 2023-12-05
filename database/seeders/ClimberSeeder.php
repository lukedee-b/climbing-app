<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Climber;

class ClimberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Climber1 = new Climber;
        $Climber1->name = "Adam Ondra";
        $Climber1->coach = "Andy Warhol";
        $Climber1->level = "Beginner";
        $Climber1->club_id = "1";
        $Climber1->save();
        
        $Climber2 = new Climber;
        $Climber2->name = "Alex Honnold";
        $Climber2->coach = "Scott Pilgrim";
        $Climber2->level = "Intermediate";
        $Climber2->club_id = "1";
        $Climber2->save();

        $Climber3 = new Climber;
        $Climber3->name = "Tommy Caldwell";
        $Climber3->coach = "Aiden Short";
        $Climber3->level = "Advanced";
        $Climber3->club_id = "1";
        $Climber3->save();

        $Climber4 = new Climber;
        $Climber4->name = "Kevin Jorgeson";
        $Climber4->coach = "Al Yankovic";
        $Climber4->level = "Beginner";
        $Climber4->club_id = "2";
        $Climber4->save();

        $Climber5 = new Climber;
        $Climber5->name = "Alex Megos";
        $Climber5->coach = "Salla Garnett";
        $Climber5->level = "Intermediate";
        $Climber5->club_id = "2";
        $Climber5->save();

        $Climber6 = new Climber;
        $Climber6->name = "Kevin Jorgeson";
        $Climber6->coach = "Aoife Byrne";
        $Climber6->level = "Advanced";
        $Climber6->club_id = "3";
        $Climber6->save();

        $Climber7 = new Climber;
        $Climber7->name = "Ashima Shiraishi";
        $Climber7->coach = "Ben Tenneson";
        $Climber7->level = "Beginner";
        $Climber7->club_id = "4";
        $Climber7->save();

        $Climber8 = new Climber;
        $Climber8->name = "Brooke Raboutou";
        $Climber8->coach = "Angelina Jolie";
        $Climber8->level = "Intermediate";
        $Climber8->club_id = "5";
        $Climber8->save();

        $Climber9 = new Climber;
        $Climber9->name = "Margo Hayes";
        $Climber9->coach = "Julia Garner";
        $Climber9->level = "Advanced";
        $Climber9->club_id = "5";
        $Climber9->save();

        $Climber10 = new Climber;
        $Climber10->name = "Miho Nonaka";
        $Climber10->coach = "Luke Skywalker";
        $Climber10->level = "Beginner";
        $Climber10->club_id = "5";
        $Climber10->save();

        $numOfClimbers = 10;
        

        // foreach(Route::all() as $route){
        //     $climbers = Climber::inRandomOrder()->take(rand(1,$numOfClimbers))->pluck('id');
        //     $route->climbers()->attach($climbers);
        // }
    }
}
