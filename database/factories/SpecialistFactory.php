<?php

namespace Database\Factories;

use App\Models\Speciality;
use App\Models\specialists;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialistFactory extends Factory
{
   // protected $model = specialists::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'speciality_id'=> Speciality::get()->random()->id,
            'experience'=>random_int(1,40),
            'user_id'=>User::get()->random()->id,
        ];
    }
}
