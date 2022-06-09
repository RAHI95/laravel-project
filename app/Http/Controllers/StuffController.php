<?php

namespace App\Http\Controllers;

use App\Http\Requests\StuffRequest;
use App\Http\Resources\StuffCollection;
use App\Http\Resources\StuffResource;
use App\Models\Stuff;
use Illuminate\Http\Request;

class StuffController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuffs = Stuff::all();
        return new StuffCollection($stuffs);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StuffRequest $request)
    {
        $stuff = new Stuff();
        $stuff->fill($request->all());
        $stuff->created_by_id =auth()->user()->id;
        $stuff->save();
        return response()->json($stuff);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $stuff = Stuff::findOrfail($id);
         return new StuffResource($stuff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuff $stuff)
    {
        //
    }
    /* Trash the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function trash($id)
    {
    $stuff = Stuff::findOrFail($id);
    $this->authorize('trash',$stuff);
    $stuff->delete();
    return response('Successfully Trashed');
    }
    public function restore($id)
    {
    $stuff = Stuff::withTrashed()->findOrFail($id);
    $this->authorize('restore',$stuff);
    $stuff->restore();
    return response()->json($stuff);
    }
    public function update(Request $request,$id)
    {
     $stuff=Stuff::findorfail($id);
     $stuff->fill($request->all());
     $this->authorize('update',$stuff);
     $stuff->save();
     return response()->json($stuff);

    }

}
