<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\StudentResource;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends APIBaseController
{
    public function index()
    {
        $student = Faculty::all();
         return new StudentCollection($student);
    }
    public function storeStudentToDepartment(StoreStudentRequest $request, $departmentId)
    {
        $student = new Student();
        $student->fill($request->all());
        $department = Department::findOrFail($departmentId);
        $student->created_by_id = auth()->user()->id;
        $department->students()->save($student);
        $student->save();
        return new StudentResource($student);
    }
    public function storeStudentFromFaculty(StoreStudentRequest $request, $facultyId)
    {
        $student = new Student();
        $student->fill($request->all());
        $faculty = Faculty::findOrFail($facultyId);
        $student->created_by_id = auth()->user()->id;
        $faculty->students()->save($student);
        $student->save();
        return new StudentResource($student);
    }
    public function store(StoreStudentRequest $request)
    {
        $student = new Student();
        $student->fill($request->all());
        $student->created_by_id = auth()->user()->id;
        $student->save();
        return response()->json($student);
    }
    public function show($id)
    {
        $student=Student::findorfail($id);
        return new StudentResource($student);
    }
    public function update(StoreStudentRequest $request,$id)
    {
        $student=Student::findorfail($id);
        $student->fill($request->all());
        $student->save();
        $this->authorize('update',$student);
        return new StudentResource($student);
    }
    public function trash($id)
    {
    $student = Student::findOrFail($id);
    $student->delete();
    $this->authorize('trash',$student);
    return response('Successfully Trashed');
    }
    public function destroy($id)
    {
        $student=Student::findorfail($id);
        $this->authorize('destroy',$student);
        $student->delete();
        $this->authorize('destroy',$student);
        return response('successfully deleted');
    }

    public function restore($id)
    {
    $student = Student::withTrashed()->findOrFail($id);
    $student->restore();
    $this->authorize('restore',$student);
    return response()->json($student);
    }
}
