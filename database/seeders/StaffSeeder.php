<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'username' => 'john.doe',
                'password' => bcrypt('secret123'),
                'name' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'jane.smith',
                'password' => bcrypt('password123'),
                'name' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data staff lainnya jika diperlukan
            // ...
        ];

        DB::table('staff')->insert($data);
    }
}
