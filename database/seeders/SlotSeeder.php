<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        // Slot::factory()->count(1)->create();

        $slots = [
            [
                'date' => today()->subDay()->format('Y-m-d'), // Yesterday
                'start' => '07:00:00',
                'end' => '08:00:00',
                'capacity' => 0,
            ],
            [
                'date' => today()->subDay()->format('Y-m-d'), // Yesterday
                'start' => '08:00:00',
                'end' => '09:00:00',
                'capacity' => 1,
            ],
            [
                'date' => today()->format('Y-m-d'),
                'start' => '07:00:00',
                'end' => '08:00:00',
                'capacity' => 20,
            ],
            [
                'date' => today()->format('Y-m-d'),
                'start' => '08:00:00',
                'end' => '09:00:00',
                'capacity' => 13,
            ],
            [
                'date' => today()->format('Y-m-d'),
                'start' => '09:00:00',
                'end' => '10:00:00',
                'capacity' => 17
            ],
            [
                'date' => today()->format('Y-m-d'),
                'start' => '10:00:00',
                'end' => '11:00:00',
                'capacity' => 12,
            ],
        ];

        Slot::insert($slots); // ✅ Bulk insert for efficiency
    }
}
