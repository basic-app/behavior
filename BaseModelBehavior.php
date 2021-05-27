<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\Behavior;

abstract class BaseModelBehavior extends BaseBehavior
{

    public function afterFind(array $params) : array
    {
        return $params;
    }

    public function beforeInsert(array $params) : array
    {
        return $params;
    }

    public function afterInsert(array $params) : array
    {
        return $params;
    }

    public function beforeUpdate(array $params) : array
    {
        return $params;
    }

    public function afterUpdate(array $params) : array
    {
        return $params;
    }

    public function beforeDelete(array $params) : array
    {
        return $params;
    }

    public function afterDelete(array $params) : array
    {
        return $params;
    }

    public function beforeValidate(array $params) : array
    {
        return $params;
    }

    public function afterValidate(array $params) : array
    {
        return $params;
    }

    public function beforeSave(array $params) : array
    {
        return $params;
    }

    public function afterSave(array $params) : array
    {
        return $params;
    }

}