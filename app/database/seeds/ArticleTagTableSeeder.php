<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticleTagTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$articleIds = Article::lists('id');
		$tagIds = Tag::lists('id');

		foreach(range(1, 100) as $index)
		{
			DB::table('article_tag')->insert([
					'article_id' => $faker->randomElement($articleIds),
					'tag_id' => $faker->randomElement($tagIds)
				]);
		}
	}

}