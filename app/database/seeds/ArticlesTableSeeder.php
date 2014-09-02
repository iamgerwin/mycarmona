<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		Article::truncate();
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Article::create([
				'title'	=> $faker->sentence(5),
				'content' => $faker->paragraph(11),
				'created_at' => $faker->dateTimeBetween('now', '+7 days')
			]);
		}
	}

}