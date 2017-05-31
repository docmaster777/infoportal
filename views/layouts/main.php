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
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выберите город <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Купянск</a></li>
                                <li><a href="#">Двуречное</a></li>
                                <li><a href="#">Шевченково</a></li>
                                <li><a href="#">Чугуев</a></li>
<!--                                <li class="divider"></li>-->
<!--                                <li><a href="#">Отдельная ссылка</a></li>-->
<!--                                <li class="divider"></li>-->
<!--                                <li><a href="#">Еще одна отдельная ссылка</a></li>-->
                            </ul>
                        </li>
                        <li><a href="#">Вход</a></li>
                        <li><a href="#">Регистрация</a></li>
<!--                        <li class="active"><a href="#">Ссылка</a></li>-->
<!--                        <li class="active"><a href="#">Ссылка</a></li>-->
                    </ul>
<!--                    <form class="navbar-form navbar-left" role="search">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Search">-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-default">Отправить</button>-->
<!--                    </form>-->
<!--                    <ul class="nav navbar-nav navbar-right">-->
<!--                        <li><a href="#">Ссылка</a></li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Действие</a></li>-->
<!--                                <li><a href="#">Другое действие</a></li>-->
<!--                                <li><a href="#">Что-то еще</a></li>-->
<!--                                <li class="divider"></li>-->
<!--                                <li><a href="#">Отдельная ссылка</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

<!--        Конец навигационного меню-->
        <?= $content ?>
    </div>



<footer class="footer">
    <div class="container">
        <br><br><br>
        <hr>
        <p class="pull-left">&copy;
            Информационный городской портал <?= date("d.m.Y") ?></p>

        <p class="pull-right">Information city portal</p>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
