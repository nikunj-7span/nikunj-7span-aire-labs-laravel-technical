<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static $usedImages = [];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageDirectory = storage_path('app/public/images');
        $images = File::glob($imageDirectory . '/*.{jpg,jpeg,png}', GLOB_BRACE);
        $availableImages = array_diff($images, static::$usedImages);

        if (empty($availableImages)) {
            static::$usedImages = [];
            $availableImages = $images;
        }

        $randomImagePath = $availableImages[array_rand($availableImages)];
        static::$usedImages[] = $randomImagePath;

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'type' => fake()->randomElement(['Founder', 'CEO', 'Consultant']),
            'avatar' => 'images/' . basename($randomImagePath),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
