<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gauname duomenis is duombazes/modelio
		$students = Student::paginate(10);

		return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$student = new Student();
		return view('students.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//validuoti duomenis paprastuoju budu
		 $request->validate([
			'name' => 'required|max:255',
			'surname' => 'required|max:255',
			'email' => 'required|email',
		]);

		$student = new Student();

		$student->name = $request->input('name');
		$student->surname = $request->input('surname');
		$student->email = $request->input('email');
		$student->phone = $request->input('phone');
		$student->save();

		// galima naudoti toki buda
		//$student->save($request->all());


		// isideti session flash message, apie sekminga isaugojia
		Session::flash('status', 'Sekmingai sukurtas studentas');

		return redirect()->route('students.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$student = Student::findOrFail($id);

    	return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$student = Student::findOrFail($id);

		return view('students.create', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	// validuoju duomenis teisingu budu, naudodamas atskira StudentRequest klase.
	public function update(StudentRequest $request, $id)
    {

		$student = Student::findOrFail($id);

		$student->name = $request->input('name');
		$student->surname = $request->input('surname');
		$student->email = $request->input('email');
		$student->phone = $request->input('phone');

		$student->save();

		// session flash zinute
		$request->session()->flash('status', 'Sekmingai atnaujintas studentas');

		return redirect()->route('students.show', $student->id);
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
		$student = Student::findOrFail($id);

		$student->delete();

		// session flash zinute
		Session::flash('status', 'Sekmingai istrintas studentas');
		Session::flash('alert-class', 'alert-danger');

		return redirect()->route('students.index');
    }
}
