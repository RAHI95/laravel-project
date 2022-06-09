<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers =Teacher::all();
        return response()->json($teachers);
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
    public function store(TeacherRequest $request)
    {
        $teacher = new Teacher;
        $teacher->fill($request->all());
        $teacher->created_by_id = auth()->user()->id;
        $teacher->save();
        return response()->json($teacher);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher=Teacher::with('department','hall')->findorfail($id);
        return new TeacherResource($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
               $teacher=Teacher::findorfail($id);
               $teacher->fill($request->all());
               $this->authorize('update',$teacher);
               $teacher->save();
               return response()->json($teacher);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::findorfail($id);
        $this->authorize('destroy',$teacher);
        $teacher->delete();
        return response('successfully deleted');
    }
    public function trash($id)
    {
    $teacher = Teacher::findOrFail($id);
    $this->authorize('trash',$teacher);
    $teacher->delete();
    return response('Successfully Trashed');
    }


    public function restore($id)
    {
    $teacher = Teacher::withTrashed()->findOrFail($id);
    $this->authorize('restore',$teacher);
    $teacher->restore();
    return response()->json($teacher);
    }
}
