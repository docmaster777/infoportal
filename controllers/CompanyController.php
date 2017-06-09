<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\web\Controller;

class CompanyController extends Controller
{
    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');

        $article = Article::find()->all();


        return $this->render('index', compact('article'));
    }
}