<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=> User::factory(),
            "titre"=> $this->faker->sentence(),
            "image"=> $this->faker->imageUrl(),
            "checkbox"=> $this->faker->sentence(),
            "radio"=> $this->faker->sentence(),
            "reponseEcrite"=> $this->faker->sentence(),
            "published_at" => $this->faker->dateTimeBetween('-1 Week', '+1 week'),
        ];
    }
}
