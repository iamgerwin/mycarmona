<?php

class DatabaseSeeder extends Seeder {

	private $tables = ['articles','tags','article_tag','cctvs','users'];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		$this->cleanDatabase();

		Eloquent::unguard();

		$this->call('ArticlesTableSeeder');
		$this->call('CctvsTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('ArticleTagTableSeeder');

		DB::statement("SET foreign_key_checks = 1");
	}

	private function cleanDatabase()
	{
		DB::statement("SET foreign_key_checks = 0");
		
		foreach($this->tables as $table) {
			DB::table($table)->truncate();
		}

	}

}
