<?php

use Illuminate\Database\Seeder;
use App\Complaint;
use Illuminate\Support\Str;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\factory::create();
        for ($i = 0; $i < 50; $i++){
            Complaint::create([
                'title' => Str::limit($faker->sentence),
                'body' => $faker->paragraph,
            ]);
        }
        
    }
}
