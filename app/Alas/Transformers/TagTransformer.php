<?php namespace Alas\Transformers;

class TagTransformer extends Transformer {

	public function transform($item)
	{
		return [
			'name' => $item['name']
		];
	}
}