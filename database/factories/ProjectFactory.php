<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = [
            ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
            ['React', 'TypeScript', 'Node.js', 'MongoDB'],
            ['Vue.js', 'JavaScript', 'Firebase', 'SCSS'],
            ['Next.js', 'PostgreSQL', 'Docker', 'AWS'],
            ['Django', 'Python', 'Redis', 'Nginx']
        ];

        $gallery = [
            fake()->imageUrl(800, 600, 'technology'),
            fake()->imageUrl(800, 600, 'technology'),
            fake()->imageUrl(800, 600, 'technology')
        ];

        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->slug(5),
            'image' => fake()->imageUrl(1200, 800, 'technology'),
            'description' => fake()->paragraph(2),
            'github_url' => 'https://github.com/' . fake()->userName . '/' . fake()->slug(2),
            'website_url' => fake()->boolean(70) ? 'https://' . fake()->domainName : null,
            'views' => fake()->numberBetween(50, 1500),
            'status' => fake()->randomElement(['published', 'draft', 'archived']),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}