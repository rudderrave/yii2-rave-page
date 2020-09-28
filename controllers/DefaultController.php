<?php

namespace ravesoft\page\controllers;

use ravesoft\controllers\admin\BaseController;

/**
 * Controller implements the CRUD actions for Page model.
 */
class DefaultController extends BaseController
{
    public $modelClass = 'ravesoft\page\models\Page';
    public $modelSearchClass = 'ravesoft\page\models\search\PageSearch';

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}