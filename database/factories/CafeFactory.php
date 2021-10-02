<?php

namespace Database\Factories;

use App\Models\Cafe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CafeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cafe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  $this->faker->company(),
            'code' =>   Str::random(10),
            'status' =>  'در حال کار',
//            'priceLvl' => now(),
//            'facilities' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'owner' => Str::random(10),
//            'manager' => $this->faker->randomKey(['مدیر رستوران'=>'مدیر رستوران','کاربر'=>'کاربر','کارمند رستوران'=>'کارمند رستوران']),
            'tel' =>  $this->faker->phoneNumber,
            'employee' =>  null,
            'address' =>  $this->faker->address(),
            'zipCode' => null,
//            'time' => 'آفلاین',
//            'verified' => $this->faker->randomKey(['NONE'=>'NONE','ایمیل'=>'ایمیل','موبایل'=>'موبایل']),
//            'status' => 'فعال',
        ];
    }
}
