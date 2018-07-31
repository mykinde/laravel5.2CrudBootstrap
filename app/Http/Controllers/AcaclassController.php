<?php

namespace App\Http\Controllers;

use App\Acaclass;
use Illuminate\Http\Request;

class AcaclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acaclasses = Acaclass::latest()->paginate(4);
        return view('acaclasses.index', compact('acaclasses'))
        ->with('i', (request()->input('page', 1) - 1) * 4);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acaclasses.create');
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
            'name' => 'required|string|min:4|max:11|unique:acaclasses',

            
        ]);

        Acaclass::create($request->all());

        return redirect()->route('acaclasses.index')->with('success','Class created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acaclass  $acaclass
     * @return \Illuminate\Http\Response
     */
    public function show(Acaclass $acaclass)
    {
        return view('acaclasses.show',compact('acaclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acaclass  $acaclass
     * @return \Illuminate\Http\Response
     */
    public function edit(Acaclass $acaclass)
    {
        return view('acaclasses.edit',compact('acaclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acaclass  $acaclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acaclass $acaclass)
    {
        request()->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        //$acaclass->update($request->all());
        $acaclass->name = $request->name;
        $acaclass->description = $request->description;
        $acaclass->addon = $request->addon;
        $acaclass->save();

        return redirect()->route('acaclasses.index')
                        ->with('success','Class Session updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acaclass  $acaclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acaclass $acaclass)
    {
        //$acaclass->delete();
        
//return redirect()->route('acaclasses.index')->with('success','Class deleted successfully');
    }
}
