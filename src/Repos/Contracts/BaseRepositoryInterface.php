<?php
/**
 * Created by PhpStorm.
 * User: drudge
 * Date: 9/10/17
 * Time: 11:43 AM
 */

namespace Optimait\Laravel\Repos\Contracts;

/**
 * Interface BaseRepositoryInterface
 * @package Optimait\Laravel
 * @author Rajendra Sharma <drudge.rajan@gmail.com>
 */
interface BaseRepositoryInterface
{
    /**
     * @param $attrToSave
     * @return mixed
     */
     public function setAttrToSave($attrToSave);

    /**
     * @return mixed
     */
     public function getAttrToSave();

    /**
     * @param $attrToValidate
     * @return mixed
     */
     public function setAttrToValidate($attrToValidate);

    /**
     * @return mixed
     */
     public function getAttrToValidate();

    /**
     * @param bool $with
     * @return mixed
     */
     public function getAll($with = false);

    /**
     * @param $count
     * @return mixed
     */
     public function getAllPaginated($count);

    /**
     * @param $id
     * @return mixed
     */
     public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
     public function requireById($id);

    /**
     * @param $data
     * @return mixed
     */
     public function save($data);

    /**
     * @param $model
     * @return mixed
     */
     public function delete($model);

    /**
     * @param $model
     * @return mixed
     */
     public function storeEloquentModel($model);

    /**
     * @param $data
     * @return mixed
     */
     public function storeArray($data);

    /**
     * @return mixed
     */
     public function startTransaction();

    /**
     * @return mixed
     */
     public function commitTransaction();

    /**
     * @return mixed
     */
     public function rollbackTransaction();

    /**
     * @param array $filter
     * @param null $callback
     * @return mixed
     */
     public function findOneBy($filter=[], $callback = null);

    /**
     * @param array $filter
     * @param null $callback
     * @return mixed
     */
     public function findBy($filter=[], $callback = null);

    /**
     * @param array $filter
     * @param array $id
     * @return mixed
     */
     public function checkDuplicates($filter=[], $id = []);

    /**
     * @param array $with
     * @param null $id
     * @return mixed
     */
    public function getDataWithRelationModelById(array $with, $id = null);

    /**
     * @param array $where
     * @param array $with
     * @return mixed
     */
    public function getAllByWhereAndRelationModel(array $where, array $with);


}