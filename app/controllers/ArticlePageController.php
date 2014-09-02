<?php

use Alas\Services\ArticleCreatorService;
use Alas\Validators\ValidationException;

class ArticlePageController extends \BaseController {

    protected $articleCreator;

    public function __construct(ArticleCreatorService $articleCreator)
    {
        $this->articleCreator = $articleCreator;
    }

    public function store()
    {
        try {
            $this->articleCreator->make(Input::all());
        } catch(ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

        return Redirect::home();
    }

}