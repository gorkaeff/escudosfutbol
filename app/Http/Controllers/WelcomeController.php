<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;
use App\User;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //dd($request->cookie('laravel_session'));     
    	$data['teams'] = Team::orderBy('name', 'asc')->get();
    	$data['last_teams'] = Team::orderBy('id', 'desc')->limit(5)->get();
    	$data['users'] = User::all();
        return view('welcome.welcome', $data);
    }
}