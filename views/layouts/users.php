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

                    <?php if (!Yii::$app->user->isGuest):?>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/users/article/index', 'id' => Yii::$app->user->id]);?>"><?= Yii::$app->user->identity['username']?>
                                (личный кабинет)
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (!Yii::$app->user->isGuest):?>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/logout']);?>">
                                Выход
                            </a></li>
                    <?php endif; ?>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--        Конец навигационного меню-->



    <div class="admin">
        <ul id="admin">
            <li><?= Html::a('Главная', ['/site/index']) ?></li>
            <?php if (!Yii::$app->user->isGuest):?>
                <li><a href="<?= \yii\helpers\Url::to(['/users/article/index', 'id' => Yii::$app->user->id]);?>">
                        Личный кабинет
                    </a></li>
            <?php endif; ?>
        </ul>
    </div>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
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
