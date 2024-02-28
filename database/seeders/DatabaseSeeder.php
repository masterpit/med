<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Database\Factories\SpecialistFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //$f = SpecialistFactory::new()->create();
       $f = Specialist::factory()->make();
       dd($f);
        // \App\Models\User::factory(10)->create();
    }
}
