<?php

namespace app\modules\api\controllers;

use app\modules\api\models\LoginForm;
use Yii;
use yii\rest\Controller;

/**
 * Class DefaultController
 */
class UserController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            return $model->getUser()->toArray(['id', 'username', 'access_token']);
        }

        Yii::$app->reponse->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }
}
