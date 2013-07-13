<?php

class VisitersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('visiters')->delete();

        $visiters = array(
        	['firstname' => 'Peter', 'lastname' => 'Kamau', 'email' => 'kamau@gmail.com', 'password' => Hash::make('kamau'), 'created_at' => new DateTime, 'updated_at' => new DateTime ],
        	['fisrtname' => 'Hoover', 'lastname' => 'Jack', 'email' => 'jack@gmail.com', 'password' => Hash::make('jack'),  'created_at' => new DateTime, 'updated_at' => new DateTime ]
        
        );

        // Uncomment the below to run the seeder
        DB::table('visiters')->insert($visiters);
    }

}