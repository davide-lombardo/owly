<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;


class CourseModulesController extends Controller
{
    // public function index()
    // {
    //     $categories = Module::all();
    //     return view("modules.index", compact("modules"));
    // }

    
    public function create() 
    {

        return view('modules.create');

    }


    public function store(Request $request, Module $module)
    {

        $formFields = $request->validate([
            'name' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Module::create($formFields);

        return redirect('/')->with('success', 'Module Successfully Created!');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::find($id);
        return view("pages/edit-category", compact('category'));
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
        $module = Module::find($id);

        //VALIDATE REQUEST
        $request = $this->validateReq($request, $id);

        //UPDATE CATEGORY
        $module->update($request->all());
        return back()->with('success', 'Module Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::find($id);

        //DELETE CATEGORY
        $module->delete();
        return redirect()->route('module.index')->with('success', 'Module Successfully Deleted!');
       
    }

    public function validateReq(Request $request, $id = NULL){

        //VALIDATION RULES
        $request->validate([
            'name' => ['required', Rule::unique('modules')->ignore($id), 'max:255']
        ], 
        ["name.unique" => 'The value provided for the "Name" filed already exists in the database']);

        return $request;
    }

}
