<?php

namespace app\components;

use app\models\Cities;
use Yii;
use yii\base\Widget;
use app\models\Category;

class CategoryWidget extends Widget
{
    public $category;
    public $cities;

    public function run(){

//        $menu = Yii::$app->cache->get('menu');
//        if ($menu) return $menu;

        $category = Category::find()->asArray()->indexBy('id')->all();
//        Yii::$app->cache->set('catcache', $this->category, 60);
        return $this->render('category', compact('category'));
    }
}