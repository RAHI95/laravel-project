<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Http\Resources\DepartmentCollection;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return new DepartmentCollection($departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentRequest $request)
    {
        $department = new Department();
        $department->fill($request->all());
        $department->created_by_id = auth()->user()->id;
        $department->save();
        return response()->json($department);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $department = Department::with('teachers')->findOrFail($id);
        return response()->json($department);
        // return new DepartmentResource($department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $department=Department::findorfail($id);
        $department->fill($request->all());
        $this->authorize('update',$department);
        $department->save();
        return response()->json($department);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {


    }

    /* Trash the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function trash($id)
    {
    $department = Department::findOrFail($id);
    $this->authorize('trash',$department);
    $department->delete();
    return response('Successfully Trashed');
    }


    public function restore($id)
    {
    $department = Department::withTrashed()->findOrFail($id);
    $this->authorize('restore',$department);
    $department->restore();
    return response()->json($department);
    }
}
