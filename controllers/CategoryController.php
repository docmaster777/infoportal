<?php
/**
 * Created by PhpStorm.
 * User: 555
 * Date: 04.06.2017
 * Time: 14:29
 */

namespace app\controllers;


use app\models\Article;
use app\models\Category;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $category = Category::find()->all();
        return $this->render('index', compact('category'));
    }

    public function actionView($id)
    {
        $this->layout = 'companies';

        $id = Yii::$app->request->get('id');
        $articles = Article::find()->where(['category_id' => $id])->all();
        $category = Category::find()->all();
        return $this->render('view', compact('articles', 'category'));
    }

    public function actionMap()
    {

        return $this->render('map');
    }


}