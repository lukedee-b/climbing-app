<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;


class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->paginate(800);

        return view('user.clubs.index', [
            'clubs' => $clubs 
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = Club::findOrFail($id);
        return view('user.clubs.show', [
            'club' => $club
        ]);
    }
}