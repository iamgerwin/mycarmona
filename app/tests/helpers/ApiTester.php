<?php

use Faker\Factory as Faker;

abstract class ApiTester extends TestCase{
	
	protected $faker;


	public function __construct()
	{
		$this->faker = Faker::create();
	}

	public function setUp()
	{
		parent::setUp();

		$this->app['artisan']->call('migrate');
	}

    protected function getJson($uri, $method = 'GET', $parameters = [])
    {
        return json_decode($this->call($method, $uri, $parameters)->getContent());
    }
    
    protected function assertObjectHasAttributes()
    {
        $args = func_get_args();
        $object = array_shift($args);
 
        foreach ($args as $attribute)
        {
            $this->assertObjectHasAttribute($attribute, $object);
        }
    }
}