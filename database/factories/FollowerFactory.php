<?php

namespace Database\Factories;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Follower::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'to_user_id' => User::where('name', 'omar')->first()->id,
            'from_user_id' => User::all()->random()->id,
            'accepted'=> 0,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}

