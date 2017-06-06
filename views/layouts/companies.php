<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\components\CategoryWidget;
use app\components\CityWidget;
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

<div class="container">

    <!--        Навигационное меню-->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--                    <a class="navbar-brand" href="#">Brand</a>-->
                <a class="navbar-brand" href="<?=\yii\helpers\Url::to(['site/index'])?>">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown bg-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выберите город <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <?=CityWidget::widget(['city' => 'city'])?>


                        </ul>
                    </li>
                    <li><a href="#">Вход</a></li>
                    <li><a href="#">Регистрация</a></li>
                    <!--                        <li class="active"><a href="#">Ссылка</a></li>-->
                    <!--                        <li class="active"><a href="#">Ссылка</a></li>-->
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--        Конец навигационного меню-->
    <div class="content">
        <?= $content ?>

    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
