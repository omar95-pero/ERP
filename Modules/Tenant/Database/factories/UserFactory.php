<?php
namespace Modules\Tenant\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Tenant\Entities\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tenant_id' => 5,
            'email_verified_at' => now(),
            'phone' => '+1 (212) 831-5684',
            'password' => bcrypt(123456), // password
            'remember_token' => Str::random(10),
        ];
    }
}

