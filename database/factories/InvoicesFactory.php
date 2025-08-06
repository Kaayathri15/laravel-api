<?php

namespace Database\Factories;

use App\Models\Invoices;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;


class InvoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoices::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['pending', 'paid']);
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
            'status' => $status,
            'billing_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid_date' => $status === 'paid' ? $this->faker->dateTimeBetween('now', '+1 month') : null,
        ];
    }
}