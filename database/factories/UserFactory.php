<?php

namespace Database\Factories;

use App\Models\User;

class UserFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'role' => 'user',
        ];
    }

    public function admin()
    {
        return $this->state([
            'role' => 'admin',
        ]);
    }
}
