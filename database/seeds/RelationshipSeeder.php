<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 52;

        for($i = 1; $i< $count; $i++){
            DB::table('course_department')->insert(
                [
                    'course_id' => $i,
                    'department_id' => '1'
                ]
            );
        }
    }
}
