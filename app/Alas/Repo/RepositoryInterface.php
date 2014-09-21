<?php
    /**
     * Created by PhpStorm.
     * User: johngerwindelasalas
     * Date: 9/21/14
     * Time: 12:54 AM
     */
    namespace Alas\Repo;

    interface RepositoryInterface
    {
        public function getAll($order,  $select);

        public function getById($id);

        public function updateById($id, $data);

        public function create($data);
    }