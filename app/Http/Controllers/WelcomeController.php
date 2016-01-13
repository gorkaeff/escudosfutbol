<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data['teams'] = Team::orderBy('name', 'asc')->get();
    	$data['last_teams'] = Team::orderBy('id', 'desc')->limit(5)->get();
        return view('welcome.welcome', $data);
    }
}