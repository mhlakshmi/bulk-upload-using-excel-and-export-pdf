<?php

namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'register_no' => $this->faker->unique()->randomNumber(),
            'student_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'date_of_birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'father_name' => $this->faker->name('male'),
            'contact_no' => $this->faker->phoneNumber(),
        ];
    }
}
