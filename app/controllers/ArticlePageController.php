<?php

    use Alas\Repo\DbArticleRepo;
    use Alas\Repo\DbTagsRepo;
    use Alas\Services\ArticleCreatorService;
use Alas\Validators\ValidationException;

class ArticlePageController extends \BaseController {

    protected $articleRepo;

    public function __construct(DbArticleRepo $articleRepo)
    {
        $this->articleRepo = $articleRepo;
    }

    public function index()
    {
        $articles = $this->articleRepo->getAll('title',['id','title','content']);
        return View::make('dashboard.article.index',compact('articles'));
    }

    public function edit($id)
    {

    }

    public function indexTag($id)
    {
        $articles = Tag::find($id)->articles;
        return View::make('dashboard.article.indextag', compact('articles'));
    }

}