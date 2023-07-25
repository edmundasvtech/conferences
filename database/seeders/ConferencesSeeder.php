<?php

namespace Database\Seeders;

use App\Models\Conferences;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conferences::create([
            'name' => 'Press Conference',
            'description' => 'Gathering of journalists.',
            'start_date' => '2023-07-26 15:00:00',
            'end_date' => '2023-07-26 15:00:00',
        ]);
    }
}
