<?php

use App\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

		for($i = 0; $i < 1000; $i++) {
			$student = new Student();

			$student->surname = Str::random(10);
			$student->name = Str::random(10);
			$student->email = Str::random(10) . '@gmail.lt';
			$student->phone = '11';

			$student->save();
		}
    }
}
