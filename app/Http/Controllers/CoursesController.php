<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Course;
use App\Models\Module;


class CoursesController extends Controller
{
    public function index()
    {

    // $modules = Module::latest()->filter(request(['module']))->get();

    // $courses = Course::query();

    // if ($request->filled('module_id')) {
    //     $courses->where('module_id', $request->input('module_id'));
    // }


        $modules = Module::all();

        $courses = Course::all();

        return view("courses.index", compact('courses', 'modules'));
    }

    public function create()
    {
        $modules = Module::all();

        return view('courses.create', compact('modules'));

    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'modules' => 'required',
            'available_spots' => 'required',
        ]);
    
        $arrayToString = implode(", ", $request->modules);

        $formFields["modules"] = $arrayToString;
        $formFields['user_id'] = auth()->id();

        Course::create($formFields);

        return redirect('/')->with('success', 'Course Successfully Created!');

    }

    public function show(Course $course)
    {

        return view('courses.show', ['course' => $course]);

    }

    public function edit(Course $course)
    {

        $modules = Module::all();
        $courses = Course::all();

        return view('courses.edit', compact('course', 'modules'));

    }

    public function update(Request $request, Course $course)
    {
        if($course->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $validated = $request->validate([
            'name' => 'required',
            'modules' => 'required',
            'available_spots' => 'required'
        ]);

        return redirect('/')->with('success', 'Course Successfully Updated!');

    }

    public function destroy(Course $course)
    {

        if($course->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $course->delete();

        return redirect('/')->with('success','Course Successfully Deleted');

    }

    public function manage(Course $course)
    {

        return view('courses.manage', ['courses' => auth()->user()->courses()->get()]);

    }

}
