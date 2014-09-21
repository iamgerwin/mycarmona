<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/21/14
 * Time: 10:39 AM
 */

namespace Alas\Repo;


use Tag;

class DbTagsRepo extends Repository implements RepositoryInterface {

    public function __construct(Tag $tagRepo)
    {
        $this->data = $tagRepo;
    }

    public function getArticlesWithTagById($id)
    {
        return $this->data->find($id)->articles;
    }
} 