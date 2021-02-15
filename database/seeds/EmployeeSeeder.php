<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $file = fopen(resource_path().'/employee_data.csv', 'r');
        $data = array();
        while(($line = fgetcsv($file)) !== false) {
            $data[] = $line; // populate data array with file data
        }

       unset($data[0]); //remove the file header from data set

       //populate db table with array data
        foreach($data as $row) {
            DB::table('employees')->insert([
                'employee_id' => $row[0],
                'name_prefix' => $row[1],
                'first_name' => $row[2],
                'middle_initial' => $row[3],
                'last_name' => $row[4],
                'gender' => $row[5],
                'email' => $row[6],
                'father_name' => $row[7],
                'mother_name' => $row[8],
                'mother_maiden_name' => $row[9],
                'date_of_birth' => $row[10],
                'date_of_joining' => $row[11],
                'salary' => $row[12],
                'ssn' => $row[13],
                'phone_no' => $row[14],
                'city' => $row[15],
                'state' => $row[16],
                'zip_code' => $row[17],
            ]);
        }
    }
}
