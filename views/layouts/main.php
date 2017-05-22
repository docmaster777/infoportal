<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="headerhome">
        <?= Html::a('Главная', ['site/index']) ?>
        <?= Html::a('Вход', ['site/index']) ?>
        <?= Html::a('Регистрация', ['site/index']) ?>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>


<!--    Навигационное меню-->

    <ul id="navigation" class="nav">
        <li><?= Html::a('Каталог Компаний', ['site/companies']) ?></li>
        <li><?= Html::a('Акции', ['site/shares']) ?></li>
        <li><?= Html::a('Афиша', ['site/afisha']) ?></li>
        <li><?= Html::a('Вакансии', ['site/vacancies']) ?></li>
        <li><?= Html::a('Объявления', ['site/adt']) ?></li>
        <li><?= Html::a('Новости', ['site/news']) ?></li>
    </ul>
<!--    Конец навигационного меню-->
</div>


<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
