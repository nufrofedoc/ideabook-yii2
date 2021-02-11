<?php

namespace app\modules\api\controllers;

use app\models\Card;
use app\modules\api\resources\CardResource;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;

/**
 * Class CardController
 */
class CardController extends ActiveController
{
    public $modelClass = CardResource::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class
        ];

        return $behaviors;
    }
}
