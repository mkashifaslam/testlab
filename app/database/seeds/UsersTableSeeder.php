<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Faker\Provider\DateTime;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10000) as $index)
		{
			User::create([
                            'password' => $faker->text,
                            'email' => $faker->email,
                            'created_at' => $faker->dateTime(),
                            'updated_at' => $faker->dateTime()
			]);
		}
	}

}