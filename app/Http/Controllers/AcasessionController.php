<?php

namespace App\Http\Controllers;

use App\Acasession;
use Illuminate\Http\Request;

class AcasessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acasessions = Acasession::latest()->paginate(4);
        return view('acasessions.index', compact('acasessions'))
        ->with('i', (request()->input('page', 1) - 1) * 4);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acasessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|min:4|max:11|unique:acasessions',

            
        ]);

        Acasession::create($request->all());

        return redirect()->route('acasessions.index')->with('success','Academic Year created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acasession  $acasession
     * @return \Illuminate\Http\Response
     */
    public function show(Acasession $acasession)
    {
        return view('acasessions.show',compact('acasession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acasession  $acasession
     * @return \Illuminate\Http\Response
     */
    public function edit(Acasession $acasession)
    {
        return view('acasessions.edit', ['acasession' => $acasession]);
        //return view('acasessions.edit',compact('acasession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acasession  $acasession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acasession $acasession)
    {
        request()->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        //$acasession->update($request->all());
        $acasession->name = $request->name;
        $acasession->description = $request->description;
        $acasession->status = $request->status;
        $acasession->save();

        return redirect()->route('acasessions.index')
                        ->with('success','Academic Session updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acasession  $acasession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acasession $acasession)
    {
        //$acasession->delete();
        
        //return redirect()->route('acasessions.index')->with('success','Academic Session deleted successfully');
    }
}
