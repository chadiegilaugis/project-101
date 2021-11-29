<?php

namespace Database\Factories;

use App\Models\MasterList;
use Illuminate\Database\Eloquent\Factories\Factory;

class MasterListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MasterList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
        'lastname' => $this->faker->lastName,
        'age' => $this->faker->numberBetween(1,50),
        'address' => $this->faker->address,
        'contact_number' => $this->faker->phoneNumber,
        'email' => $this->faker->email,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
