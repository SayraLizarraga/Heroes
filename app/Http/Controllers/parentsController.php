<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\parents;

class parentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents= parents::where('user_id', Auth::id())
        -> where ('active', 1)
        -> select('id', 'name', 'gender')
        -> get();

        //dd($parents);
        return view('parents.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        parents::create([
            'user_id'=> Auth::id(),
            'name'=> $request->name, 
            'gender'=> $request->gender
        ]);
        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parents= parents::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'gender')
        -> firstOrFail();
        return view('parents.show', compact('parents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $parents= parents::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'gender')
        -> firstOrFail();
        return view('parents.edit', compact('parents'));
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
        $parents= parents::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'gender')
        -> firstOrFail();
        $parents->update([
            'name'=> $request->name,
            'gender'=>$request->gender
        ]);
        return redirect()->route('parents.show', $parents->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parents= parents::where('user_id', Auth::id())
        -> where ('active', 1)
        -> where ('id', $id)
        -> select('id', 'name', 'gender')
        -> firstOrFail();
        $parents->update([
          'active'=> false
        ]);
        return redirect()->route('parents.index', $parents->id);
    }
}
