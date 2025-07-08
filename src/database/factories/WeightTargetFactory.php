<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\WeightTarget;

class WeightTargetFactory extends Factory
{
    protected $model = WeightTarget::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'target_weight'=>$this->faker->randomFloat( 1 , 0 , 100 )
        ];
    }
}
