<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lecture;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GradesController extends Controller
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
    public function create()
    {
        //
		$students = Student::all();

		$lectures = Lecture::all();
		return view('grades.create', compact('students', 'lectures'));
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
		$request->validate([
			'grade' => 'required|min:1|max:10|numeric',
			'student_id' => 'required|exists:students,id',
			'lecture_id' => 'required|exists:lectures,id'
		]);

		$grade = new Grade();

		$grade->student_id = $request->input('student_id');
		$grade->lecture_id = $request->input('lecture_id');
		$grade->grade = $request->input('grade');

		$grade->save();

		Session::flash('status', 'Sekmingai pridetas pazymys');

		return redirect()->route('students.show', $grade->student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
