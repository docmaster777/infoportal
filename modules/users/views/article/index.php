<?php

use app\models\Category;
use app\models\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\users\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать запись', ['create', 'id'=>Yii::$app->user->id], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            [
//                'attribute'=>'user_id',
//                'label'=>'Родительская категория',
//                'format'=>'text', // Возможные варианты: raw, html
//                'content'=>function($data){
//                    return $data->getParentName();
//                },
////                'filter' => Category::getParentsList()
//            ],
//            [
//                'attribute'=>'id',
//                'label'=>'Родительская категория',
//                'format'=>'text', // Возможные варианты: raw, html
//                'content'=>function($data){
//                    return $data->getParentName();
//                },
////                'filter' => Category::getParentsList()
//            ],
//            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'adress:ntext',
             'date',
            // 'image',
            // 'viewed',
            // 'user_id',
            // 'status',
             'category_id',
            // 'references:ntext',
            // 'working_days:ntext',
            // 'weekend:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
