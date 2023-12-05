<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\en_US\Company;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\Base;
use Faker\Provider\Lorem;
use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Text;
use Faker\Provider\Internet;
use Faker\Provider\Color;
use Faker\Provider\Image;
use Faker\Provider\Barcode;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Products::class;
    // protected $model = \App\Models\Products::class;
    public function definition(): array
    {
        return [
            // 'product_id' => $this->faker->unique()->ean8,
            // 'name' => $this->faker->name,
            // 'category_id' => $this->faker->name,
            // 'type' => $this->faker->word,
            // 'image' => $this->faker->image($dir = '/tmp', $width = 100, $height = 100),
            // 'brand' => $this->faker->company,
            // 'price' => $this->faker->numberBetween($min = 10000000, $max = 900000000),
            // 'description' => $this->faker->paragraphs($nb = 3, $asText = false) ,
            // 'status' => $this->faker->word,
            // 'feature' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
