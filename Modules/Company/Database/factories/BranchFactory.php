<?php
namespace Modules\Company\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Company\Entities\Branch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' => 'Branch_' . $this->faker->word(),
            'tenant_id' => 5,
        ];
    }
}

