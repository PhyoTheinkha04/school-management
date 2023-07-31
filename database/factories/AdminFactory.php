<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$d7zeJGEnF9iOZ0D.DNgQmuWDwBwsER9iGyGYf/at97QuzElcfSvDi', // password
            'remember_token' => Str::random(10),
        ];
    }
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
