<?php

namespace Database\Factories;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender'=> $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail(),
            'tel' => str_replace('-','', $this->faker->phoneNumber()),
            'address'  => $this->faker->city(),
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->realText(100),
            ];
    }
}
