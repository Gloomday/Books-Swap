<?php

namespace app\modules\cabinet;

/**
 * cabinet module definition class
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\cabinet\controllers';


    public function init()
    {
        parent::init();
        $this->setLayoutPath('@frontend/views/layouts');
    }
}
