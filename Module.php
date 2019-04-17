<?php

namespace autoxloo\yii2\rest_api_doc;

class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    public $controllerNamespace = 'autoxloo\yii2\rest_api_doc\controllers';
    /**
     * @var string Base url for API requests.
     */
    public $baseApiUrl;


    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            $this->id => $this->id . '/default/index',
            $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>' => $this->id . '/<controller>/<action>',
            ], false);
    }
}
