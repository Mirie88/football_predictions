<?php

namespace App\Http\Controllers;

use App\Models\Predictions;
use App\Http\Requests\StorePredictionsRequest;
use App\Http\Requests\UpdatePredictionsRequest;

class PredictionsController extends Controller
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
    public function store(StorePredictionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Predictions $predictions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Predictions $predictions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePredictionsRequest $request, Predictions $predictions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Predictions $predictions)
    {
        //
    }
}
