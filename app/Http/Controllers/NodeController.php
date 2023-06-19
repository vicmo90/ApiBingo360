<?php

namespace App\Http\Controllers;

use App\Models\node;
use App\Http\Requests\StorenodeRequest;
use App\Http\Requests\UpdatenodeRequest;

class NodeController extends Controller
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
     * @param  \App\Http\Requests\StorenodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function show(node $node)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function edit(node $node)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenodeRequest  $request
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenodeRequest $request, node $node)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function destroy(node $node)
    {
        //
    }
}
