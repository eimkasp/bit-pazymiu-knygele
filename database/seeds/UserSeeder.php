<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

		$user = new User();

		$user->email = 'eimantas@kasperiunas.com';
		$user->name = 'Eimantas';
		$user->password = Hash::make('secret123');

		$user->save();


		// sukuriu dar viena useri
		$user = new User();

		$user->email = 'test@test.com';
		$user->name = 'Admin';
		$user->password = Hash::make('admin');

		$user->save();

		/*for($i = 0; $i < 10; $i++) {
			$user = new User();

			$user->email = Str::random(10).'@gmail.com';
			$user->name = Str::random(10);
			$user->password = Hash::make('secret123');

			$user->save();
		}*/
    }
}
