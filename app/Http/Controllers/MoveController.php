<?php

namespace App\Http\Controllers;

use App\Game;
use App\Move;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return 'All';
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
     * @param Request $request
     * @param Game    $game
     *
     * @return void
     */
    public function store(Request $request, Game $game)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Move $move
     *
     * @return Response
     */
    public function show(Move $move)
    {
        return 'test';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Move $move
     *
     * @return Response
     */
    public function edit(Move $move)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Move    $move
     *
     * @return Response
     */
    public function update(Request $request, Move $move)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Move $move
     *
     * @return Response
     */
    public function destroy(Move $move)
    {
        //
    }
}
