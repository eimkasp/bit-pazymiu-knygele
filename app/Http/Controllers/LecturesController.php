<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$lectures = Lecture::all();

		$lecturesData['labels'] = [];
		$lecturesData['values'] = [];

		foreach ($lectures as $lecture) {
			$lecturesData['labels'][] = $lecture->name;
			$lecturesData['values'][] = $lecture->grades->count();
		}

		return response()->json($lecturesData);
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
    public function store(Request $request)
    {
		$lectures = new Lecture();
		$lectures->name = $request->input('name');
		$lectures->description = $request->input('description');
		$lectures->save();
		return response()->json($lectures, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$lecture = Lecture::findOrFail($id);
		return response()->json($lecture);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$lecture = Lecture::find($id);

		$lecture->delete();

		return response()->json('success', 200);
    }
}
