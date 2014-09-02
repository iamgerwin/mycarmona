<?php namespace Alas\Transformers;

class ArticleTransformer extends Transformer {

	public function transform($item)
	{
		return [
			'title' => $item['title'],
			'content' => $item['content'],
			'date' => $item['created_at']
		];
	}
}