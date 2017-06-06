<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Cities;

class KharkovController extends Controller
{
    public function actionCompanies()
    {
        $cities = Cities::find()->all();
        return $this->render('Companies', compact('cities'));
    }
}