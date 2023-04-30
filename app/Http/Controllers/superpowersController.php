<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\superpowers;

class superpowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superpowers= superpowers::where('user_id', Auth::id())
        -> where ('active', 1)
        -> select('id', 'name', 'description')
        -> get();
        
        $page_title="SuperPower";

        return view('superpowers.index', compact('superpowers', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $page_title="Create Superpower";

        return view('superpowers.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        superpowers::create([
            'user_id'=> Auth::id(),
            'name'=> $request->name, 
            'description'=> $request->description
        ]);
        return redirect()->route('superpowers.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $superpowers= superpowers::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'description')
        -> firstOrFail();
        
        $page_title=" Show SuperPower";

        return view('superpowers.show', compact('superpowers', 'page_title'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superpowers= superpowers::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'description')
        -> firstOrFail();
        $page_title=" Edit SuperPower";

        return view('superpowers.edit', compact('superpowers', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $superpowers= superpowers::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'description')
        -> firstOrFail();
        $superpowers->update([
            'name'=> $request->name,
            'description'=>$request->description
        ]);
        return redirect()->route('superpowers.show', $superpowers->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superpowers= superpowers::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'description')
        -> firstOrFail();
        $superpowers->update([
          'active'=> false
        ]);
        return redirect()->route('superpowers.index', $superpowers->id);
    }
}
