<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newStudent = new Student();
            $newStudent->name = $faker->firstName($gender = 'male'|'female');
            $newStudent->lastname = $faker->lastName;
            $newStudent->code = $faker->numberBetween($min = 1, $max = 9999);
            $newStudent->email=$faker->email;
            $newStudent->save();
        }
    }
}
