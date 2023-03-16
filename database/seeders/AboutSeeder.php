<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Company',
            'subtitle' => 'lorem ipsum',
            'description' => 'lorem ipsum',
            'vision' => 'lorem ipsum',
            'mission' => 'lorem ipsum'
        ]);
    }
}
