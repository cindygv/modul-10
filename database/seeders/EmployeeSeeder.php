<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('employees')->insert([
        //     [
        //         'firstname' => 'Cindy',
        //         'lastname' => 'Gracya',
        //         'email' => 'cindygracyavcgv@gmail.com',
        //         'age' => 19,
        //         'position_id' => 1
        //     ],
        //     [
        //         'firstname' => 'Siuchon',
        //         'lastname' => 'Chan',
        //         'email' => 'siuchonchan@gmail.com',
        //         'age' => 30,
        //         'position_id' => 2
        //     ],
        //     [
        //         'firstname' => 'Cookies',
        //         'lastname' => 'Oreo',
        //         'email' => 'cookiesoreo@gmail.com',
        //         'age' => 27,
        //         'position_id' => 3
        //     ],
        // ]);
        Employee::factory()->count(10)->create();
    }
}
