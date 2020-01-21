<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\GameRepository;
use App\Factories;
use App\Game;
use App\Http\Requests\StoreGameRequest;
use App\Services\Game\Factories\GameFactory;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class GameController extends Controller
{
    /**
     * @var GameRepository
     */
    private $repository;

    public function __construct(GameRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGameRequest $request
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(StoreGameRequest $request)
    {
        return $this->repository->store(
            $request->validated()
        );
    }


    /**
     * @param Request $request
     * @param Game    $game
     *
     * @return RedirectResponse|Redirector
     */
    public function join(Request $request, Game $game)
    {
        if ($game->users()->count() > 1) {
            return back();
        }

        if (!$game->users->contains($request->user())) {
            $game->users()->attach($request->user());
        }


        return redirect("/games/{$game->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     *
     * @return Factory|View
     */
    public function show(Game $game)
    {
        return view('game', [
            'game' => $game,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Game $game
     *
     * @return Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game    $game
     *
     * @return Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     *
     * @return Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
