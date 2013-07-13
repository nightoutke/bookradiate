<?php

class ForumsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('forums')->delete();

        $forums = array(
        	['forum_title' => 'Book Pirates', 'forum_description' => 'This is the Pirates book description book', 'topics' => 2, 'posts' => 6723, 'last_post' => 'by John kamau'],
        	['forum_title' => 'Book Shouls', 'forum_description' => 'This is the Shouls book description book', 'topics' => 245, 'posts' => 63, 'last_post' => 'by Geen Talo']
        );

        // Uncomment the below to run the seeder
         DB::table('forums')->insert($forums);
    }

}