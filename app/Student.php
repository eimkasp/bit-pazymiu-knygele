<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
	protected $table = 'students';

	public function grades() {
		return $this->hasMany('App\Grade', 'student_id', 'id');
	}

	public function gradesAverage() {

		$gradesAverage = 0;

		// studento priskirtu pazymiu masyvas
		$grades = $this->grades;

		foreach ($grades as $grade) {
			$gradesAverage += $grade->grade;
		}

		// patikrinu ar nevykdoma dalyba is nulio
		if($this->grades()->count() != 0) {
			$gradesAverage = $gradesAverage / $this->grades()->count();
		}

		// suapvalinu reiksme
		return round($gradesAverage, 2);
	}

	public static function studentPercentage() {
		$studentCount =  Student::count();
		$maxStudents = 1000;

		$studentPercentage = [];
		$studentPercentage['value'] = $studentCount/$maxStudents * 100;

		if($studentPercentage['value'] < 50) {
			$studentPercentage['class'] = 'bg-success';
		} else if($studentPercentage['value'] < 75) {
			$studentPercentage['class'] = 'bg-warning';
		} else {
			$studentPercentage['class'] = 'bg-danger';
		}


		return $studentPercentage;
	}
}
