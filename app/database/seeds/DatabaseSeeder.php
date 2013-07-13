<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('GuestsTableSeeder');
		
		$this->call('StudentsTableSeeder');
		$this->call('VisitersTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('ForumsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ProfilesTableSeeder');
	}

}