<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\JobPost;
use App\Models\Region;
use App\Models\Status;
use App\Models\Type;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Throwable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    protected $model = JobPost::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = fake()->unique()->title(),
            'slug' => Str::slug($title),
            'salary' => fake()->random_int(10,5000),
            'description' => fake()->realText(),
            'image' => $this->createImage(),
            'type_id' => Type::isType('job')->get()->random()->id,
            'category_id' => Category::all()->random()->id,
            'status_id' => Status::isType('job_status')->get()->random()->id,
            'region_id' => Region::all()->random()->id,
            'user_id' => User::notAdmin()->get()->random()->id,
            'created_at' => fake()->dateTimeBetween('-1 year', '-6 month'),
            'updated_at' => fake()->dateTimeBetween('-5 month', 'now'),
        ];
    }

    public function createImage(): ?string
    {
        try {
            $image = file_get_contents(DatabaseSeeder::IMAGE_URL);
        } catch (Throwable $exception) {
            return null;
        }

        $filename = Str::uuid() . '.jpg';

        Storage::disk('job_images')->put($filename, $image);

        return $filename;
    }
}
