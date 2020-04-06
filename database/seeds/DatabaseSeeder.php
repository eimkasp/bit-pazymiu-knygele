<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
		//         $this->call(GradesSeeder::class);
		$this->call(StudentSeeder::class);
		$this->call(LecturesSeeder::class);


    }
}
