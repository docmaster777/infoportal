<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\modules\users\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index','id'=>Yii::$app->user->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'adress:ntext',
            'date',
//            [
//                'label' => 'Дата',
//                'value' => function($data){
//                    return $data->date;
//                },
//            ],
            'image',
            'viewed',
            [
                'label' => 'Пользователь',
                'value' => function($data){
                    return $data->user->username;
                },
            ],
//            ['user_id'=>Yii::$app->user->id],
            'status',
//            'category_id',
            [
                'attribute'=>'category_id',
                'value' => function($data){
                    return $data->category->title;
                },
                'format'=>'text',

            ],
            'references:ntext',
            'working_days:ntext',
            'weekend:ntext',
        ],
    ]) ?>

</div>
