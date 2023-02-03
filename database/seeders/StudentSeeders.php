<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;

class StudentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
		foreach(range(1,100) as $value){
			DB::table('topstudents') -> insert([
                    'student_ID' => $faker->numerify('CB#####'),
                    'student_name' => $faker->name,
                    'project_title' =>$faker->title,
                    'category' => $faker->randomElement(['PSM 1','PSM 2']),
                    'mark1' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
                    'mark2' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
                    'mark3' =>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 40),
                    'totalmark' =>$faker->randomFloat($nbMaxDecimals = 2, $min = 70, $max = 100),    
                ]);
		}
    }
}
