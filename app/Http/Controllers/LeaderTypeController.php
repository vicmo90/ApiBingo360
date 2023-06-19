<?php

namespace App\Http\Controllers;

use App\Models\leaderType;
use App\Http\Requests\StoreleaderTypeRequest;
use App\Http\Requests\UpdateleaderTypeRequest;

class LeaderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreleaderTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreleaderTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leaderType  $leaderType
     * @return \Illuminate\Http\Response
     */
    public function show(leaderType $leaderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leaderType  $leaderType
     * @return \Illuminate\Http\Response
     */
    public function edit(leaderType $leaderType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateleaderTypeRequest  $request
     * @param  \App\Models\leaderType  $leaderType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateleaderTypeRequest $request, leaderType $leaderType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leaderType  $leaderType
     * @return \Illuminate\Http\Response
     */
    public function destroy(leaderType $leaderType)
    {
        //
    }
}
