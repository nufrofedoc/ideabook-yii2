<?php

namespace app\modules\api\controllers;

use yii\rest\Controller;

/**
 * Class DefaultController
 */
class UserController extends Controller
{
    public function actionLogin()
    {
        // if (!Yii::$app->user->isGuest) {
        //     return $this->goHome();
        // }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            return $model->getUser();
        }

        Yii::$app->reponse->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }
}
