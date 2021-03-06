<?php
/**
 * @link http://www.rave-soft.com/
 * @copyright Copyright (c) 2015 Taras Makitra
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace ravesoft\page;

use Yii;

/**
 * Page Module For Rave CMS
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class PageModule extends \yii\base\Module
{
    /**
     * Version number of the module.
     */
    const VERSION = '0.1.0';

    public $controllerNamespace = 'ravesoft\page\controllers';
    public $viewList;
    public $layoutList;

    /**
     * Default views and layouts
     * Add more views and layouts in your main config file by calling the module
     *
     *   Example:
     *
     *   'page' => [
     *       'class' => 'ravesoft\page\PageModule',
     *       'viewList' => [
     *           'page' => 'View Label 1',
     *           'page_test' => 'View Label 2',
     *       ],
     *       'layoutList' => [
     *           'main' => 'Layout Label 1',
     *           'dark_layout' => 'Layout Label 2',
     *       ],
     *   ],
     */
    public function init()
    {
        if (empty($this->viewList)) {
            $this->viewList = [
                'page' => Yii::t('rave', 'Page view')
            ];
        }

        if (empty($this->layoutList)) {
            $this->layoutList = [
                'main' => Yii::t('rave', 'Main layout')
            ];
        }

        parent::init();
    }
}