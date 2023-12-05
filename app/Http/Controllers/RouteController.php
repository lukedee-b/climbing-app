<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::orderBy('created_at', 'desc')->paginate(800);

        return view('routes.index', [
            'routes' => $routes 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('routes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->title);

        //validation rules
        $rules =[
            'grade'=> "required|string|min:1|max:150",
            'county'=> 'required|string|min:1|max:1000',
            'description'=> 'required|string|min:1|max:4000',
            'style'=> 'required|string|min:1|max:1000',
            

        ];

        $request->validate($rules);


        $route = new Route;
        $route->grade = $request->grade;
        $route->county = $request->county;
        $route->description = $request->description;
        $route->style = $request->style;
        $route->save();

        return redirect()->route('routes.index')->with('status', 'Created a new route');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = Route::findOrFail($id);
        return view('routes.show', [
            'route' => $route
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $route = Route::findOrFail($id);
        return view('routes.edit', [
            'route' => $route
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
                'grade'=> "required|string|min:1|max:150",
                'county'=> 'required|string|min:1|max:1000',
                'description'=> 'required|string|min:1|max:6000',
                'style'=> 'required|string|min:1|max:1000',
                


    
            ];
    
            $messages=[
                'title.unique'=>'route title should be unique'
            ];
    
            $request->validate($rules, $messages);
    
    
            $route = Route::findOrFail($id);
            $route->grade = $request->grade;
            $route->county = $request->county;
            $route->description = $request->description;
            $route->style = $request->style;
            $route->save();
    
            return redirect()       
                ->route('routes.index')
                ->with('status', ' Updated a route');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $route  = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('routes.index')->with('status', 'route deleted successfully');
    }
}