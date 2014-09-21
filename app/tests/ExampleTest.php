<?php

class ExampleTest extends TestCase {

	public function testBasicExample()
	{
		$this->call('GET','/');
       $this->assertFalse(false);
	}


    public function it_assert_false(){
        $this->assertFalse(true);
    }


}