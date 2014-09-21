<?php
/**
 * Created by PhpStorm.
 * User: johngerwindelasalas
 * Date: 9/21/14
 * Time: 12:52 AM
 */

namespace Alas\Repo;


 abstract class Repository implements RepositoryInterface {

     protected $data;

     /**
      * getAll [Q]
      * @param string $order
      * @param array $select
      * @return mixed
      */
     public function getAll($order = 'name', $select = [])
     {
         return $this->data->orderBy($order)->get($select);
     }

     /**
      * getById [Q]
      * @param $id
      * @return mixed
      */
     public function getById($id)
     {
         return $this->data->where('id',$id)->first();
     }

     /**
      * updateById [C]
      * @param $id
      * @param $data
      */
     public function updateById($id, $data)
     {
         $this->data->where('id',$id)->update($data);
     }

     /**
      * create [C]
      * @param $data
      */
     public function create($data)
     {
        $this->data->create($data);
     }

     /**
      * delete [C]
      * @param $id
      */
     public function delete($id)
     {
         $this->data->where('id',$id)->delete();
     }

     /**
      * softDelete [C]
      * @param $id
      */
     public function softDelete($id)
     {
         $this->data->where('id',$id)->update(['active', false]);
     }
 }