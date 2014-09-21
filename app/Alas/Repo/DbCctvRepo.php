<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/20/14
 * Time: 9:30 PM
 */

namespace Alas\Repo;

use Cctv;

class DbCctvRepo extends Repository implements RepositoryInterface
{

    public function __construct(Cctv $cctv)
    {
        $this->data = $cctv;
    }

}