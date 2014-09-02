<?php namespace Alas\Services;

use Alas\Validators\ArticleValidator;
use Alas\Validators\ValidationException;

class ArticleCreatorService {

    protected $validator;

    public function __construct(ArticleValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if( $this->validator->isValid($attributes) )
        {
            Article::create([
                'title' => $attributes['title'],
                'content' => $attributes['content'],
                'active' => $attributes['active']
                ]);

            return true;
        }

        throw new ValidationException('Article validation failed', $this->validator->getErrors());

    }
}