<?php

namespace app\api\v1;

use yii\base\BootstrapInterface;


/**
 * api module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\api\v1\controllers';


    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $app->urlManager->addRules([
            'POST api/<apiVersion:(v1)>/<controller>' => 'api/<apiVersion>/<controller>/create',
        ], false);
    }

}
