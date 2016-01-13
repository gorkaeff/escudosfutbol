<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
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
        session_start();
        $rating = new Rating;
        $rating->team_id = $team_id;
        $rating->session = $_SESSION["session"];
        $rating->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($team_id)
    {
        session_start();
        $registro = Rating::where('team_id', '=', $team_id)->where('session', '=', $_SESSION["session"])->get();
        $registro[0]->delete();
        return redirect('/');
    }
}
