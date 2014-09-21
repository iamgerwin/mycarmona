<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/21/14
 * Time: 12:52 AM
 */

namespace Alas\Repo;


use Article;

class DbArticleRepo extends Repository implements RepositoryInterface{

    /**
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->data =$article;
    }

    public function getTagsWithInArticleId($id)
    {
        return $this->data->where('id',$id)->first()->tags;
    }

    public function attachArticleOnTag($id, $tag_id)
    {
        $this->data->where('id',$id)->first()->tags()->attach($tag_id);
    }

    public function dettachArticleOnTag($id, $tag_id)
    {
        $this->data->where('id',$id)->first()->tags()->detach($tag_id);
    }
} 