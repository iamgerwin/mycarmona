<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CctvsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		Cctv::truncate();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Cctv::create([
				'name' => $faker->userName(),
				'location' => $faker->streetName(),
				'description' => $faker->paragraph(3),
				'link' => $faker->ipv4()
			]);
		}
	}

}