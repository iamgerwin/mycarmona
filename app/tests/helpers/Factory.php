<?php

trait Factory {

	protected $times = 1;

	public function times($count)
	{
		$this->times = $count;

		return $this;
	}

	protected function make($type, array $fields = [])
	{
        while ($this->times--)
        {
            $stub = array_merge($this->getStub(), $fields);
 
            $type::create($stub);
        }
		$this->times = 1;
	}

	protected function getStub()
	{
		throw new BadMethodCallException('Create getStub method to declare fields.');
		
	} 
}