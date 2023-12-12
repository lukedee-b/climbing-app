<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $routes = Route::paginate(10);
        return view('user.routes.index')->with('routes', $routes);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = Route::findOrFail($id);

        return view('user.routes.show')->with('route', $route);
    }
}
