<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TeamRepository;
use App\Team;

class TeamController extends Controller
{
    /**
     * The team repository instance.
     *
     * @var TeamRepository
     */
    protected $teamRepo;

    /**
     * Create a new controller instance.
     *
     * @param  TeamRepository  $tasks
     * @return void
     */
    public function __construct(TeamRepository $teamRepo)
    {
        $this->middleware('auth');
        $this->teamRepo = $teamRepo;
    }

    /**
     * Display a list of all of the user's teams.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $data['teams'] = $this->teamRepo->userTeams($request->user());
        return view('teams.index', $data);
    }

    /**
     * Create a new team.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'link' => 'required|max:255',
            'link_author' => 'required|max:255'
        ]);

        $request->user()->teams()->create([
            'user_id'       => $request->user()->id,
            'name'          => $request->name,
            'link'          => $request->link,
            'link_author'   => $request->link_author,
            'information'   => $request->information
        ]);

        return redirect('/teams');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Team  $team
     * @return Response
     */
    public function destroy(Request $request, $team)
    {
        $teamDelete = Team::find($team);
        $this->authorize('destroy', $teamDelete);
        //$equipoDelete = Team::find($team_id);
        $teamDelete->delete();
        return redirect('/teams');
    }
}