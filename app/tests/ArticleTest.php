<?php

class ArticleTest extends ApiTester {

	use Factory;

	/** @test */
	public function it_fetches_articles()
	{
		//arrange
		$this->times(5)->make('Article');
		//act
		$this->getJson('api/v1/articles');
		//assert
		$this->assertResponseOk();
	}
	/** @test */
	public function it_fetches_a_single_article()
	{
		$this->make('Article');

		$article = $this->getJson('api/v1/articles/1')->data;

		$this->assertResponseOk();
		$this->assertObjectHasAttributes($article,'title','content','date');
	}

    /** @test */
    public function it_404s_if_a_lesson_is_not_found()
    {
        $json = $this->getJson('api/v1/articles/x');
 
        $this->assertResponseStatus(404);
        $this->assertObjectHasAttributes($json, 'error');
    }

    /** @test */
    public function it_creates_a_new_lesson_given_valid_parameters()
    {
    	$this->getJson('api/v1/articles','POST',$this->getStub());

    	$this->assertResponseStatus(201);
    }

    /** @test */
    public function it_throws_a_422_if_a_new_lesson_request_fails_validation()
    {
    	$this->getJson('api/v1/articles','POST');

    	$this->assertResponseStatus(422);
    }

    protected function getStub()
    {
    	return [
				'title' => $this->faker->sentence,
				'content' => $this->faker->paragraph(3),
				'created_at' => $this->faker->dateTimeBetween('now','+7 days')
			];
    }

}