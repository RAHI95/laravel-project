<?php

namespace App\Http\Controllers;

use App\Http\Requests\student_teacherrequest;
use App\Http\Requests\StudentTeacherRequest;
use App\Http\Resources\student_teacherresource;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student = Student::first();
        $teacher = Teacher::first();
        $student->teachers()->attach([2]);
    // //    return response()->json($teacher);


    }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */

        public function store(Request $request)
            {
                $student = Student::find($request->input('student_id'));
                $student->teachers()->attach($request->input('teacher_id'));
            }


        // // $student->fill($request->all());
        // $student->save();
        // return new student_teacherresource($student_teacher);

        // $student->teachers()->attach($teacher);


//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\student_teacher  $student_teacher
//      * @return \Illuminate\Http\Response
//      */
//     public function show(student_teacher $student_teacher)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\student_teacher  $student_teacher
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(student_teacher $student_teacher)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\student_teacher  $student_teacher
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, student_teacher $student_teacher)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\student_teacher  $student_teacher
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(student_teacher $student_teacher)
//     {
//         //
//     }
}
