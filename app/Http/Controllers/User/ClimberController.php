<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Climber;

class ClimberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $climbers = Climber::all();

        $climbers = Climber::paginate(200);

        return view('user.climbers.index', ['climbers' => $climbers 
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $climbers = Climber::findOrFail($id);
        return view('user.climbers.show', [
            'climbers' => $climbers
        ]);
    }
}