<?php


class TagsTableSeeder extends Seeder {

	public function run()
	{
		Tag::create([
				'name' => 'feed'
			]);
		Tag::create([
				'name' => 'page'
			]);
		Tag::create([
				'name' => 'annoucement'
			]);
	}

}