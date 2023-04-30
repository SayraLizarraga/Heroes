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

        $page_title="Parents";
        //dd($parents);
        return view('parents.index', compact('parents', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Create Parents";

        return view('parents.create', compact('page_title'));
        ;
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

        $page_title="Show Parents";
        return view('parents.show', compact('parents', 'page_title'));
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
        $page_title="Edit Parents";
        return view('parents.edit', compact('parents', 'page_title'));
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
