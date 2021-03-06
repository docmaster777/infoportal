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

<div class="admin">
    <ul id="admin">
        <li><?= Html::a('Главная', ['/site/index']) ?></li>
        <li><?= Html::a('Статьи', ['/admin/article/index']) ?></li>
        <li><?= Html::a('Категории', ['/admin/category/index']) ?></li>
        <li><?= Html::a('Подкатегории', ['/admin/subcategories/index']) ?></li>
        <li><?= Html::a('Теги', ['/admin/tag/index']) ?></li>
        <li><?= Html::a('Города', ['/admin/cities/index']) ?></li>
        <li><?= Html::a('Login', ['/site/login']) ?></li>
    </ul>
</div>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
