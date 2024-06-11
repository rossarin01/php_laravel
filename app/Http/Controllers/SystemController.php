<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\system
;
class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = System::orderBy('id', 'desc')->paginate(5);
         return view('system.index', compact('data'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ss_id',
            'ss_name',
            'ss_codecourse',
            'ss_course',
            'ss_credit',
            'ss_namethec' ,
            ]);
           
            system::create($request->all());
            return redirect()->route('system.index')->with('success', 'system data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(system $system)
    {
        return view('system.show', compact('system'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(system $system)
    {
        return view('system.edit', compact('system'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
        public function update(Request $request, system $system)
    {
        $request->validate([
            'ss_id'=>'required',
            'ss_name'=>'required',
            'ss_codecourse'=>'required',
            'ss_course'=>'required',
            'ss_credit'=>'required',
            'ss_namethec'=>'required',

        ]);
            $system->update($request->all());
            return redirect()->route('system.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(system $system)
    {
        $system->delete();
        return redirect()->route('system.index')->with('success', 'system data created successfully.');
    }
}
