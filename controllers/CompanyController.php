<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\web\Controller;

class CompanyController extends Controller
{
    public function actionIndex($id)
    {
        $id = Yii::$app->request->get('id');
//        debug($id);

        $article = Article::find()->where(['id' => $id])->all();


        return $this->render('index', compact('article'));
    }
}