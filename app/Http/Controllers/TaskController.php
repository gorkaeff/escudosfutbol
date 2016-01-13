<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TeamRepository;

class TaskController extends Controller
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
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}