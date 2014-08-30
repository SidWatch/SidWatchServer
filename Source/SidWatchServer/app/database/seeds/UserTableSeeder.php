<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User;
		$user->EmailAddress = 'brian@treegecko.com';
		$user->Password = Hash::make('tester');
		$user->FirstName = 'Brian';
		$user->LastName = 'Nelson';
		$user->save();
	}
}