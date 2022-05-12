<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
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
        return Course::all();
        // $courses = Course::all();
        // return CourseResource::collection($courses);

        // if(count($courses) > 0){
        //     return $response->sendResponse($courseData, "Courses Successfully Found.");  
        // }else{
        //     return $response->sendResponse($courseData, "Courses list is empty.");  
        // } 
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
            'name' => 'required',
            'modules' => 'required',
            'available_spots' => 'required',
        ]);

        return Course::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
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
        $course->update($request->all());

        return $course;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Course::destroy($id);
        
        $course = Course::find($id);

        // if($course){
        //     $courseData = ["course" => $course];
        //     return $response->sendResponse($courseData, "Course Successfully Deleted.", 200);    
        // } else {
        //     return $response->sendError('Resource Not Found Error.', "Can't delete the resource. Course with the id of $id not found"); 
        // }
    }
}
