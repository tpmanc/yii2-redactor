<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\redactor\widgets;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class RedactorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/tpmanc/yii2-redactor/assets';
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        $this->js[] = 'redactor.js';
        $this->css[] = 'redactor.css';
    }
}
