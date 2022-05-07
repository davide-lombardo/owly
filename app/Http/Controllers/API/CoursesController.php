<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;

use App\Models\Module;
use App\Models\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Course::all();

        if(count($courses) > 0){
            return $response->sendResponse($courseData, "Courses Successfully Found.");  
        }else{
            return $response->sendResponse($courseData, "Courses list is empty.");  
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $validation = $this->rules($request);

        if($validation->fails()){
            return $response->sendError('Validation Error.', $validation->errors(), 400);  

        } else { 
            $course = Course::create($request->all());
            $courseData = ["course" => $course];
            return $response->sendResponse($courseData, "Course Successfully Created.", 201);  
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $course = Course::find($id);

        if($course){
            //VALIDATE REQUEST
            $validation = $this->rules($request);

        if($validation->fails()){
            return $response->sendError('Validation Error.', $validation->errors(), 400);  

        }else{
           $course->fill($request->all());
           $course->save();
           $courseData = ["course" => $course];
            return $response->sendResponse($courseData, "Course Successfully Updated.");  
        }

        } else {
            return $response->sendError('Resource not found .', "Can't update the resource. Course with the id of $id is not found"); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        if($course){
            $courseData = ["course" => $course];
            return $response->sendResponse($courseData, "Course Successfully Deleted.", 200);    
        } else {
            return $response->sendError('Resource Not Found Error.', "Can't delete the resource. Course with the id of $id not found"); 
        }
    }
}
