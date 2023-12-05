<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Route;

class Routeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Routes1 = new Route;
        $Routes1->grade = "7b";
        $Routes1->county = "Wicklow";
        $Routes1->description = "A tecky slab that ends in a sketchy dyno";
        $Routes1->style = "Bouldering";
        $Routes1->save();

        $Routes2 = new Route;
        $Routes2->grade = "7c";
        $Routes2->county = "Dublin";
        $Routes2->description = "The 'Twisted Crux' challenges climbers with a sequence of overhanging moves, requiring precise dyno jumps and a delicate heel hook to reach the elusive top hold.";
        $Routes2->style = "Bouldering";
        $Routes2->save();

        $Routes3 = new Route;
        $Routes3->grade = "9a";
        $Routes3->county = "Donegal";
        $Routes3->description = "The 'Slab Serenity' demands balance and technique as climbers negotiate a low-angle, friction-dependent traverse across delicate crimps and slopers to reach the high crux";
        $Routes3->style = "Bouldering";
        $Routes3->save();

        $Routes4 = new Route;
        $Routes4->grade = "8b";
        $Routes4->county = "Galway";
        $Routes4->description = "In 'Gravity's Embrace,' climbers face a challenging roof problem, involving powerful gaston moves, a series of precise toe hooks, and a daring swing to the final jug.";
        $Routes4->style = "Bouldering";
        $Routes4->save();

        $Routes5 = new Route;
        $Routes5->grade = "8a";
        $Routes5->county = "Cork";
        $Routes5->description = "The 'Zen Archway' offers a meditative experience as climbers navigate a flowing, sculpted arch feature, requiring seamless, fluid movement and balance on an array of sloping volumes.";
        $Routes5->style = "Bouldering";
        $Routes5->save();

        $Routes6 = new Route;
        $Routes6->grade = "9a";
        $Routes6->county = "Wexford";
        $Routes6->description = "Prepare for a dynamic test of strength in 'Jagged Ascent,' where climbers must conquer a steep overhang with a complex sequence of crimp holds and dynamic dynos to reach the summit.";
        $Routes6->style = "Bouldering";
        $Routes6->save();

        $Routes7 = new Route;
        $Routes7->grade = "6b";
        $Routes7->county = "Derry";
        $Routes7->description = "Climbers take on 'Lunar Eclipse,' a mesmerizing night-themed boulder with pitch-black holds, navigating a pitch-black wall under ultraviolet light, relying on touch and memory to solve the problem.";
        $Routes7->style = "Bouldering";
        $Routes7->save();

        $Routes8 = new Route;
        $Routes8->grade = "8c";
        $Routes8->county = "Donegal";
        $Routes8->description = "The 'Mystic Maze' is a mind-bending route with hidden pockets, creating a puzzle-solving challenge as climbers decipher a cryptic sequence of moves, combined with agility and balance, to unlock the route's secrets.";
        $Routes8->style = "Bouldering";
        $Routes8->save();

        $Routes9 = new Route;
        $Routes9->grade = "6b";
        $Routes9->county = "Donegal";
        $Routes9->description = "This one is pretty boring just a awkward ladder.";
        $Routes9->style = "Lead";
        $Routes9->save();

        $Routes10 = new Route;
        $Routes10->grade = "8b";
        $Routes10->county = "Wicklow";
        $Routes10->description = "The 'Skyline Summit' is an exhilarating lead climbing route that ascends a vertical face with a mix of technical crimps, delicate balance moves, and dynamic clips, testing a climber's endurance and mental focus.";
        $Routes10->style = "Lead";
        $Routes10->save();

        $Routes11 = new Route;
        $Routes11->grade = "9b";
        $Routes11->county = "Wicklow";
        $Routes11->description = "Climbers face the ultimate endurance challenge on 'Eternal Overhang,' a relentless lead climbing route that conquers a sustained overhang with a series of strenuous jugs and relentless pump-inducing cruxes.";
        $Routes11->style = "Lead";
        $Routes11->save();

        $Routes12 = new Route;
        $Routes12->grade = "7c";
        $Routes12->county = "Limerick";
        $Routes12->description = "Embark on a journey of exposure and commitment in 'Abyssal Arête,' a lead climbing route that navigates a sheer arete high above the ground, demanding precision footwork and a bold spirit.";
        $Routes12->style = "Lead";
        $Routes12->save();

        $Routes13 = new Route;
        $Routes13->grade = "9b";
        $Routes13->county = "Clare";
        $Routes13->description = "The 'Echoing Cavern' is a lead climbing route that takes climbers deep into a cave, utilizing technical stemming, stemming, and stemming techniques to navigate the tight, echo-filled space.";
        $Routes13->style = "Lead";
        $Routes13->save();

        $Routes14 = new Route;
        $Routes14->grade = "9a";
        $Routes14->county = "Clare";
        $Routes14->description = "Brace for a mental challenge on 'Mindbender Mantle,' a lead climbing route that combines perplexing route-finding with a series of strenuous mantles, pushing climbers to solve the puzzle in mid-air.";
        $Routes14->style = "Lead";
        $Routes14->save();
    }
}
