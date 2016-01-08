<?php
 
use Illuminate\Database\Seeder;
 
class TasksTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();
 
        $tasks = array(
            ['id' => 1, 'name' => 'Laravel Project 1.0 Task', 'slug' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'Laravel Project 1.0 Task 1.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Laravel Project 1.0 Task 2', 'slug' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'Laravel Project 1.0 Task 2.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Laravel Project 1.0 Task 3', 'slug' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'Laravel Project 1.0 Task 3.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Laravel Project 1.0 Task 4', 'slug' => 'task-4', 'project_id' => 1, 'completed' => true, 'description' => 'Laravel Project 1.0 Task 4.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Laravel Project 1.0 Task 5', 'slug' => 'task-5', 'project_id' => 1, 'completed' => true, 'description' => 'Laravel Project 1.0 Task 5.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Laravel Initialization Task 1', 'slug' => 'task-6', 'project_id' => 2, 'completed' => true, 'description' => 'Laravel initialization task 1.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Laravel Initialization Task 2', 'slug' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'Laravel initialization task 2.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }
 
}