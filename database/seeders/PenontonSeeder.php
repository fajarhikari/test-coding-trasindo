<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenontonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penontons')->insert([
            [
                'nomorid' => '1234567890',
                'name' => 'John Doe',
                'gender' => 'Male',
                'type_tiket' => 'VIP',
                'konser' => 'Concert A',
                'status' => 'Wait',
                'confirmed' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomorid' => '0987654321',
                'name' => 'Jane Smith',
                'gender' => 'Female',
                'type_tiket' => 'Regular',
                'konser' => 'Concert A',
                'status' => 'Wait',
                'confirmed' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data penonton lainnya jika diperlukan
        ]);
    }
}
