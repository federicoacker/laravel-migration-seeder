<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = rand(0,1) == 0 ? "Trenitalia" : "Italo";
        $trenitaliaTypes = [
            "Regionale",
            "Regionale Veloce",
            "Frecciarossa",
            "Frecciargento"
        ];
        $italoTypes = [
            "Alta Velocità"
        ];

        $departure_datetime = $this->faker->dateTimeBetween('-1 day', 'now');
        $arrival_datetime = $this->faker->dateTimeInInterval($departure_datetime, "+8 hours");

        $is_canceled = rand(0,1);
        $is_on_time = $is_canceled == 1 ? 1 : rand(0,1);

        return [
            "company" => $company,
            "train_number" => $company == "Trenitalia" ? 
            $this->faker->numberBetween(0,99999) . strtoupper($this->faker->randomLetter()) : 
            $this->faker->numberBetween(0,999999) . strtoupper($this->faker->randomLetter()),
            "platform" => $this->faker->numberBetween(1,20),
            "type" => $company == "Trenitalia" ?
            $trenitaliaTypes[array_rand($trenitaliaTypes, 1)] :
            $italoTypes[0],
            "departure_station" => $this->faker->city(),
            "arrival_station" => $this->faker->city(),
            "departure_datetime" => $departure_datetime,
            "arrival_datetime" => $arrival_datetime,
            "carriages" => $this->faker->numberBetween(4, 15),
            "is_on_time" => $is_on_time,
            "is_canceled" => $is_canceled
        ];
    }
}
