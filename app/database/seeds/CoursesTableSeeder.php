<?php

class CoursesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('courses')->delete();

        $courses = array(
        	['course_number' => 'e238sj', 'course_name' => 'Enterprenual Executions', 'fall_semester' => 45, 'spring_semester' => 6, 'professor' => 'James Howard', 'book' => 'Aliens', 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
        	['course_number' => 'e2THVSj', 'course_name' => 'Principals of Microelectronics', 'fall_semester' => 26, 'spring_semester' => 96, 'professor' => 'Idris Doord', 'book' => 'Pirates', 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        );

        // Uncomment the below to run the seeder
        DB::table('courses')->insert($courses);
    }

}