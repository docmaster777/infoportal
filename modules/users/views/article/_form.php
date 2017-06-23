<?php

use app\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\users\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adress')->textarea(['rows' => 2]) ?>

<!--    --><?//= $form->field($model, 'date')->textInput() ?>

<!--    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
<!--    --><?//= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'image')->fileInput() ?>

<!--    --><?//= $form->field($model, 'viewed')->textInput() ?>

<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'status')->textInput() ?>
    <?php
    $article = Category::find()->all();
    $items = ArrayHelper::map(Category::find()->all(), 'id', 'title');
    $params = [
        'prompt' => 'Выберите категорию',
//        'message'=>'Не выбрана категория'
    ];
    ?>
    <?= $form->field($model, 'category_id')->dropDownList($items,$params); ?>
<!--    --><?//= Html::dropDownList('category', $selectedCategoty, $categories, ['class' => 'form-control']) ?>

    <?= $form->field($model, 'references')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'working_days')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'weekend')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
