<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/21/14
 * Time: 2:36 PM
 */

namespace Alas\Repo;


use User;

class DbUserRepo extends Repository implements RepositoryInterface {

    public function __construct(User $userRepo)
    {
        $this->data = $userRepo;
    }


} 