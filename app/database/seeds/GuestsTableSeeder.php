<?php

class GuestsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('guestsseeder')->delete();

        $guests = array(
        	['firstname' => 'Peter', 'lastname' => 'Kamau', 'email' => 'kamau@gmail.com', 'password' => Hash::make('kamau'), 'repeat_password' => Hash::make('kamau'), 'terms' => 'yes', 'school' => 'Harvard', 'created_at' => new DateTime, 'updated_at' => new DateTime ],
        	['fisrtname' => 'Hoover', 'lastname' => 'Jack', 'email' => 'jack@gmail.com', 'password' => Hash::make('jack'), 'repeat_password' => Hash::make('jack'), 'terms' => 'no', 'school' => 'Moi', 'created_at' => new DateTime, 'updated_at' => new DateTime ]
        );

        // Uncomment the below to run the seeder
         DB::table('guests')->insert($guests);
    }

}