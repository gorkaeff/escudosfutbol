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
     * @param  TeamRepository  $teamRepo
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
        $data['teams'] = $request->user()->role === 'app_admin' ? Team::all() : $this->teamRepo->userTeams($request->user());
        return view('teams.index', $data);
    }

    public function edit(Request $request, $team_id){
        //Controlar si puede editarlo o no
        $this->teamRepo->isTeamForUser($request->user(), $team_id);

        //Si consigue pasar la validacion, vamos a ello
        $data['team'] = Team::find($team_id);
        return view('teams.edit', $data);
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

        return redirect()->route('teams.index')
            ->with('status', 'success')
            ->with('message', 'Equipo creado correctamente! Añade más para llegar a todos los equipos del mundo ;)');
    }

    public function update(Request $request, $team_id)
    {
        $equipo = Team::find($team_id);

        if (!$equipo){
            abort(404);
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'link' => 'required|max:255',
            'link_author' => 'required|max:255'
        ]);

        $equipo->name = $request->name;
        $equipo->link = $request->link;
        $equipo->link_author = $request->link_author;
        $equipo->information = $request->information;
        $equipo->update();

        return redirect()->route('teams.index')
            ->with('status', 'success')
            ->with('message', 'Equipo actualizado correctamente! Informa a tus amigos de la actualización.');
    }

    /**
     * Destroy the given team.
     *
     * @param  Request  $request
     * @param  Team  $team
     * @return Response
     */
    public function destroy(Request $request, $team)
    {
        $this->teamRepo->isTeamForUser($request->user(), $team);

        $teamDelete = Team::find($team);

        if (!$teamDelete){
            abort(404);
        }

        $this->authorize('destroy', $teamDelete);
        $teamDelete->delete();

        return redirect()->route('teams.index')
            ->with('status', 'success')
            ->with('message', 'Equipo eliminado correctamente. ¿No te gustaba?, ¿Estaba mal creado? Espero que nos ayudes');
    }
}