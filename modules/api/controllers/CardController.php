<?php

namespace app\modules\api\controllers;

use app\modules\api\resources\CardResource;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

/**
 * Class CardController
 */
class CardController extends ActiveController
{
    public $modelClass = CardResource::class;
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // $behaviors['authenticator']['authMethods'] = [
        //     HttpBearerAuth::class,
        // ];

        // $behaviors['authenticator']['except'] = ['options'];

        // return array_merge(parent::behaviors(), [
        //     'cors' => Cors::class
        // ]);

        $auth = $behaviors['authenticator'];
        $auth['authMethods'] = [
            HttpBearerAuth::class
        ];
        unset($behaviors['authenticator']);
        $behaviors['cors'] = [
            'class' => Cors::class
        ];
        $behaviors['authenticator'] = $auth;

        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        return new ActiveDataProvider([
            'query' => $this->modelClass::find()->byUser(\Yii::$app->user->id)
        ]);
    }
}
