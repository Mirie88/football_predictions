<?php

namespace App\Http\Controllers;

use App\Models\Leaderboards;
use App\Http\Requests\StoreLeaderboardsRequest;
use App\Http\Requests\UpdateLeaderboardsRequest;

class LeaderboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeaderboardsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Leaderboards $leaderboards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leaderboards $leaderboards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeaderboardsRequest $request, Leaderboards $leaderboards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leaderboards $leaderboards)
    {
        //
    }
}
