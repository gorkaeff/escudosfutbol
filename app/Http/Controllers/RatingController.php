<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Team;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $team_id)
    {
        $team = Team::find($team_id);

        if (!$team){
            abort(404);
        }

        $message = $team->name." es uno de tus equipos favoritos! Enhorabuena";

        session_start();
        $rating = new Rating;
        $rating->team_id = $team_id;
        $rating->session = $_SESSION["session"];
        $rating->save();

        return redirect()->route('welcome')->with('status', 'success')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($team_id)
    {
        $team = Team::find($team_id);

        if (!$team){
            abort(404);
        }
        
        $message = "".$team->name." ha dejado de ser un equipo favorito. ¿Por qué?";

        session_start();
        $registro = Rating::where('team_id', '=', $team_id)->where('session', '=', $_SESSION["session"])->get();
        $registro[0]->delete();
        
        return redirect()->route('welcome')->with('status', 'danger')->with('message', $message);
    }
}