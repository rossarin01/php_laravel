<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = School::orderBy('id', 'desc')->paginate(5);
         return view('school.index', compact('data'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create');
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
             'sc_id',
             'sc_name',
             'sc_address',
             'sc_tambon',
             'sc_amp',
             'sc_prove',
             'sc_zipcode',
             'sc_tel',
             'sc_email',
             ]);
            
             School::create($request->all());
             return redirect()->route('school.index')->with('success', 'school data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('school.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('school.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $request->validate([
             'sc_id'=>'required',
             'sc_name'=>'required',
             'sc_address'=>'required',
             'sc_tambon'=>'required',
             'sc_amp'=>'required',
             'sc_prove'=>'required',
             'sc_zipcode'=>'required',
             'sc_tel'=>'required',
         ]);
             $school->update($request->all());
             return redirect()->route('school.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('school.index')->with('success', 'School data created successfully.');
    }
}
