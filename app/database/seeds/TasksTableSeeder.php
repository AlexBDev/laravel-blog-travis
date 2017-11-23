<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            DB::table('tasks')->insert([
                'content' => "Tâche $i ajouté automatiquement",
                'is_done' => rand(0,1),
            ]);
        }
    }
}
