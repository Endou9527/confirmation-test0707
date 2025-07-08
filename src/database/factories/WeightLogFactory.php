<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\WeightLog;

class WeightLogFactory extends Factory
{

    protected $model = WeightLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hours = $this->faker->numberBetween(0, 23);
        $minutes = $this->faker->numberBetween(0, 59);

        $exerciseTime = sprintf('%02d:%02d:00', $hours, $minutes);
        return [
            'date'=>$this->faker->date,
            'weight'=>$this->faker->randomFloat( 1 , 0 , 100 ),
            'calories'=>$this->faker->numberBetween(100 , 1000),
            'exercise_time'=> $exerciseTime,
            'exercise_content'=>$this->faker->sentence()
        ];
    }
}
