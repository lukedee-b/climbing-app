<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Club;
use App\Models\Climber;
use Auth;


class RouteController extends Controller
{
    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Auth::user()->authorizeRoles('admin');

        // if(!Auth::user()->hasRole('admin')){
        //     return to_route('user.books.index');
        // }

        $routes = Route::all();

        $routes = Route::orderBy('created_at', 'desc')->paginate(800);

        return view('admin.routes.index', [
            'routes' => $routes 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $climbers = Climber::all();

        return view('admin.routes.create')->with('climbers', $climbers);
        // return view('admin.routes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'grade' => 'required',
            'county' => 'required',
            'description' => 'required|max:900',
            'style' => 'required',
            'route' => 'file|image',
            // 'climbers' =>['required' , 'exists:climbers,id']
        ]);

        $route_image = $request->file('route_image');
        $extension = $route_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' .  str_replace(' ', '_', $request->title) . '.' . $extension;

        $route_image->storeAs('public/images', $filename); //store the image
        // This code renames the book file. We do this to avoid any dublicate names in the database so that it doesn't break. And the last one saves the image in your local server in a new /images folder.
        // $route_image->storeAs('public/images', $filename);

        $route = Route::create([
            'grade' => $request->grade,
            'county' => $request->county,
            'description' => $request->description,
            'style' => $request->style,
           'route_image' => $filename,
        //    'climber' => $request->climber,

        ]);

        //  $route = new route();
        //  $route->grade = $request->grade;
        //  $route->county = $request->county;
        //  $route->description = $request->description;
        //  $route->style = $request->style;
        //  $route->route_image = $request->route_image;
        //  $route->save();
        // $route->grade = $request->grade;

        // $route->authors()->attach($request->climbers);

        return redirect()->route('admin.routes.index')->with('status', 'Created a new Route');
        
        
        //dd($request->title);

        //validation rules
        // $rules =[
        //     'grade'=> "required|string|min:1|max:150",
        //     'county'=> 'required|string|min:1|max:1000',
        //     'description'=> 'required|string|min:1|max:4000',
        //     'style'=> 'required|string|min:1|max:1000',
            

        // ];

        // $request->validate($rules);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = Route::findOrFail($id);
        return view('admin.routes.show', [
            'route' => $route
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $route = Route::findOrFail($id);
        return view('admin.routes.edit', [
            'route' => $route
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // //dd($request->title)
    
            // //validation rules
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
                ->route('admin.routes.index')
                ->with('status', ' Updated a route');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('admin.routes.index')->with('status', 'route deleted successfully');
    }
}