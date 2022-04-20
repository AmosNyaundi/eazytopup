<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Http\Requests\StoreAgentsRequest;
use App\Http\Requests\UpdateAgentsRequest;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commission()
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
     * @param  \App\Http\Requests\StoreAgentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        foreach (Agents::all() as $table) {
            //echo $flight->name;
            return view('pages.agents', ['table'=>$table]);
        }
        return view('pages.agents');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function edit(Agents $agents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentsRequest  $request
     * @param  \App\Models\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentsRequest $request, Agents $agents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agents $agents)
    {
        //
    }
}
