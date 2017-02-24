<?php

namespace app\modules\main;

/**
 * main module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\main\controllers';

    public function init()
    {
        parent::init();
        $this->setLayoutPath('@frontend/views/layouts');
    }
}
