<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    // ...现存的代码...

    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }
}