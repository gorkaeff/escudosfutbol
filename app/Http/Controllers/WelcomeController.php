<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use App\Rating;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $this->generateSessionValueIfNotExists();

        $data['teams'] = [];     
    	$teams = Team::orderBy('name', 'asc')->get();

        foreach ($teams as $team) {
            $isFavourite = Rating::where('session', '=', $_SESSION["session"])
                                 ->where('team_id', '=', $team->id)
                                 ->get();
                                 
            if (count($isFavourite) > 0){
                $team->isFavourite = true;
            } else {
                $team->isFavourite = false;
            }
            array_push($data['teams'], $team); 
        };

        $data['ratings'] = Rating::all();
    	$data['last_teams'] = Team::orderBy('id', 'desc')->limit(5)->get();
    	$data['users'] = User::all();
        return view('welcome.welcome', $data);
    }

    private function generateSessionValueIfNotExists()
    {
        session_start();
        if (! isset($_SESSION["session"])){
            $_SESSION["session"] = str_random(40);
        }        
    }
}