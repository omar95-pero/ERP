<?php
namespace Modules\HR\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobTitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\HR\Entities\JobTitle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->jobTitle(),
            'tenant_id' => 5,
        ];
    }
}

