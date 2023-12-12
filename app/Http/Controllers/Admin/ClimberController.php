<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Club;
use App\Models\Climber;
use Auth;

class ClimberController extends Controller
{
    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $climber = Climber::all();

        $climbers = Climber::paginate(200);

        return view('admin.climbers.index', ['climbers' => $climbers 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $climbers = Climber::all();

        return view('admin.climbers.create');
        // ->with('clubs', $clubs)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->title)

        //validation rules
        $rules =[
            'name'=> 'required|string|min:1|max:150',
            'coach'=> 'required|string|min:1|max:1000',
            'level'=> 'required|string|min:1|max:1000',
            'club_id'=> 'required|string|min:1|max:1000',

        ];

        $messages=[
            'name.unique'=>'climber name should be unique'
        ];

        $request->validate($rules, $messages);


        $climber = new climber;
        $climber->name = $request->name;
        $climber->coach = $request->coach;
        $climber->level = $request->level;
        $climber->club_id = $request->club_id;
        $climber->save();

        return redirect()->route('admin.climbers.index')->with('status', 'Created a new climber');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $climber = Climber::findOrFail($id);
        return view('admin.climbers.show', [
            'climber' => $climber
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $climber = Climber::findOrFail($id);
        return view('admin.climbers.edit', [
            'climber' => $climber
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            //dd($request->title)
    
            //validation rules
            $rules =[
                'name'=> 'required|string|min:1|max:150',
                'coach'=> 'required|string|min:1|max:1000',
                'level'=> 'required|string|min:1|max:1000',
                'club_id'=> 'required|string|min:1|max:1000',
    
            ];
    
            $messages=[
                'title.unique'=>'climber title should be unique'
            ];
    
            $request->validate($rules, $messages);
    
    
            $climber = Climber::findOrFail($id);
            $climber->name = $request->name;
            $climber->coach = $request->coach;
            $climber->level = $request->level;
            $climber->club_id = $request->club_id;
            $climber->save();
    
            return redirect()       
                ->route('admin.climbers.index')
                ->with('status', ' Updated a climber');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $climber  = Climber::findOrFail($id);
        $climber->delete();

        return redirect()->route('admin.climbers.index')->with('status', 'climber deleted successfully');
    }
}