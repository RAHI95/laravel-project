<?php

namespace App\Http\Controllers;

use App\Http\Requests\HallRequest;
use App\Http\Resources\HallCollection;
use App\Http\Resources\HallResource;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $halls = Hall::all();
         return new HallCollection($halls);
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
    public function store(HallRequest $request)
    {
        $hall = new Hall();
        $hall->fill($request->all());
        $hall->created_by_id = auth()->user()->id;
        $hall->save();
        return response()->json($hall);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hall=Hall::with('department')->findorfail($id);
        return new HallResource($hall);
    //    return response()->json($hall);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit(Hall $hall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hall=hall::findorfail($id);
        $hall->fill($request->all());
        $this->authorize('update',$hall);
        $hall->save();
        return response()->json($hall);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        //
    }
    public function trash($id)
    {
            $hall = Hall::findOrFail($id);
            $this->authorize('trash',$hall);
            $hall->delete();
            return response('Successfully Trashed');
    }


    public function restore($id)
    {
    $hall = Hall::withTrashed()->findOrFail($id);
    $this->authorize('restore',$hall);
    $hall->restore();
    return response()->json($hall);
    }
}
