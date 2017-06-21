<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\users\models\Article */

$this->title = 'Создание записи';
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index', 'id'=>Yii::$app->user->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
