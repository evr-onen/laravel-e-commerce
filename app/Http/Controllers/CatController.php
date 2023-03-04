<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatRequest;
use App\Models\Cat;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->all();
        // $request->validated();

        foreach ($request['catData'] as $it) {

            $cat = new Cat();
            $cat->name = $it['name'];
            $cat->main_id = $it['main_id'];
            $cat->save();
            $catIds[] = $cat->id;
        }

        return Cat::whereIn('id', $catIds)->get();
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
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        return Cat::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(CatRequest $request, $id)
    {
        $request->validated();


        $cat = Cat::find($request->id)->update(['name' => $request->name, 'main_id' => $request->main_id]);
        // $cat->name = $request->name;
        // $cat->main_id = $request->main_id;
        // $cat->save();
        return Cat::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        return Cat::find($id)->delete();
    }
}
