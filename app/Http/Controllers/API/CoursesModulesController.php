<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;

use App\Models\Module;
use App\Models\Course;

class CoursesModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ResponseController $response)
    {
        $courses = Course::with('modules')
            ->approved()
            ->latest();
        return CourseResource::collection($modules);
        
        // $modules = Module::all();
        // $modulesData = ["modules" => $modules];

        // if(count($modules) > 0) {
        //     return $response->sendResponse($modulesData, "Modules Successfully Found.");  
        // } else {
        //     return $response->sendResponse($modulesData, "Modules list is empty.");  
        // } 
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->rules($request);

        if($validation->fails()){
            return $response->sendError('Validation Error.', $validation->errors(), 400);  

        }else{
           $category = Category::create($request->all());
           $categoryData = ["category" => $category];
            return $response->sendResponse($categoryData, "Category Successfully Created.", 201);  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        if($module) {
            $validation = $this->rules($request, $id);

        if($validation->fails()){
            return $response->sendError('Validation Error.', $validation->errors(), 400);  

        } else {
           $module->fill($request->all());
           $module->save();
           $moduleData = ["module" => $module];
            return $response->sendResponse($moduleData, "Module Successfully Updated.");  
        }

        } else {
            return $response->sendError('Resource Not Found Error.', "Can't update the resource. Module with the id of $id not found"); 
        }
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
        //
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

        if($module){
            $moduleData = ["module" => $module];
            return $response->sendResponse($moduleData, "Module Successfully Deleted.", 200);    
        }else{
            return $response->sendError('Resource Not Found Error.', "Can't delete the resource. Module with the id of $id not found"); 
        }
    }
}
