<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->paginate(8);

        return view('clubs.index', [
            'clubs' => $clubs 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clubs.create');
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
            'location'=> 'required|string|min:1|max:1000',
            'number_of_walls'=> 'required|string|min:1|max:1000',
            'price'=> 'required|string|min:1|max:1000',
            'facilities'=> 'required|string|min:1|max:1000',
            'cafe'=> 'required|string|min:1|max:1000',


        ];

        $messages=[
            'name.unique'=>'club name should be unique'
        ];

        $request->validate($rules, $messages);


        $club = new Club;
        $club->name = $request->name;
        $club->location = $request->location;
        $club->number_of_walls = $request->number_of_walls;
        $club->price = $request->price;
        $club->cafe = $request->cafe;
        $club->save();

        return redirect()->route('clubs.index')->with('status', 'Created a new club');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.show', [
            'club' => $club
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $club = Club::findOrFail($id);
        return view('clubs.edit', [
            'club' => $club
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
                'location'=> 'required|string|min:1|max:1000',
                'number_of_walls'=> 'required|string|min:1|max:1000',
                'price'=> 'required|string|min:1|max:1000',
                'facilities'=> 'required|string|min:1|max:1000',
                'cafe'=> 'required|string|min:1|max:1000',
    
            ];
    
            $messages=[
                'title.unique'=>'club title should be unique'
            ];
    
            $request->validate($rules, $messages);
    
    
            $club = Club::findOrFail($id);
            $club->name = $request->name;
            $club->location = $request->location;
            $club->number_of_walls = $request->number_of_walls;
            $club->price = $request->price;
            $club->facilities = $request->facilities;
            $club->cafe = $request->cafe;
            $club->save();
    
            return redirect()       
                ->route('clubs.index')
                ->with('status', ' Updated a club');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $club  = Club::findOrFail($id);
        $club->delete();

        return redirect()->route('clubs.index')->with('status', 'club deleted successfully');
    }
}