<?php
    use Alas\Repo\DbTagsRepo;

    /**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/21/14
 * Time: 1:58 PM
 */

class TagPageController extends BaseController {

    public function __construct(DbTagsRepo $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }

    public function indexArticle($id)
    {
        $tag = $this->tagRepo->getById($id);
        $articles = $this->tagRepo->getArticlesWithTagById($id);

        return View::make('dashboard.article.indextag', compact('tag','articles'));
    }
} 