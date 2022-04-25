<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Commission;
use App\Models\Clients;
use Carbon\Carbon;
use App\Http\Requests\StoreAgentsRequest;
use App\Http\Requests\UpdateAgentsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function commission()
    {
        if(Auth::check())
        {
            $commission = Commission::join('agents', 'agents.uniqueId', '=', 'purchase.uniqueId')
                        ->select("*",Commission::raw('purchase.uniqueId, count(*) as cnt, SUM(purchase.amount) as total'))
                        ->whereMonth('purchase.created_at', Carbon::now()->month)
                        ->groupBy("purchase.uniqueId")
                        //->orderBy('total', 'desc')
                        ->get();

            return view('pages.commission', ['commission'=>$commission]);
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_agent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentsRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Agents::create($request->all());

        return redirect()->route('pages.index')->with('success','Agent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::check())
        {

            $agents = Agents::leftJoin('clients', 'agents.uniqueId', '=', 'clients.uniqueId')
                    //->leftJoin('commissions', 'agents.uniqueId', '=', 'commissions.uniqueId')
                    ->select("*",Agents::raw('agents.uniqueId, count(clients.uniqueId) as cnt,agents.created_at'))
                    ->groupBy("agents.uniqueId")
                    //->orderBy('cnt', 'desc')
                    ->get();

            return view('pages.agents', ['agents'=>$agents]);
        }
        return redirect()->route('login');

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
    // public function destroy(Agents $agents)
    // {
    //     $agents->delete();
    //    // Agents::where('id', $agents)->delete();
    //     return redirect()->route('agents')->with('success','Agent deleted successfully');
    // }

    public function destroy($id)
    {
        $post = Agents::where('uniqueId', $id)->firstOrFail();

        $post->delete();

        return redirect()->route('agents')->with('danger','Agent deleted successfully');
   }
}
