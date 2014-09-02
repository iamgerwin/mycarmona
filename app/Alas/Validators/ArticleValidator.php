<?php namespace Alas\Validators;

class ArticleValidator extends Validator{

    protected static $rules =[
        'title'   => 'required|min:5',
        'content' => 'required|min:20',
        'active'  => 'required|in:1,0'
    ];
}