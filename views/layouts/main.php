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

<!--    Слайдер-->

    <div class="sl">
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/1.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 1</h3>
        <p class="sl__desc">Описание слайда № 1</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/2.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 2</h3>
        <p class="sl__desc">Описание слайда № 2</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/3.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 3</h3>
        <p class="sl__desc">Описание слайда № 3</p>
        </span></a></div>
    </div>
<!--    Конец слайдера-->

<!--    Навигационное меню-->

    <ul id="navigation" class="nav">
        <li><a href="">Каталог Компаний</a></li>
        <li><a href="">Акции</a></li>
        <li><a href="">Афиша</a></li>
        <li><a href="">Вакансии</a></li>
        <li><a href="">Объявления</a></li>
        <li><a href="">Новости</a></li>
    </ul>

<!--    Категории-->
    <div id="category">
        <div class="row">
            <div class="caption">
                Выберите категорию
            </div>
            <div class="col-cat">
                <div class="span icon-1">
                    <div class="text">Авто, мото</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-2">
                    <div class="text">Бизнес и финансы</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-3">
                    <div class="text">Бытовой сервис, ремонт</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-4">
                    <div class="text">Гостиницы, туризм</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-5">
                    <div class="text">Государство, общество</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-6">
                    <div class="text">Промышленность</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-7">
                    <div class="text">Здоровье и красота</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-8">
                    <div class="text">Кафе, бары, рестораны</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-9">
                    <div class="text">Культура и искусство</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-10">
                    <div class="text">Магазины</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-11">
                    <div class="text">Образование, курсы</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-12">
                    <div class="text">Недвижимость</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-13">
                    <div class="text">Полезные телефоны</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-14">
                    <div class="text">Развлечения и досуг</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-15">
                    <div class="text">Строительство и ремонт</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-16">
                    <div class="text">Такси и перевозки</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-17">
                    <div class="text">Услуги</div>
                </div>
            </div>
            <div class="col-cat">
                <div class="span icon-18">
                    <div class="text">Реклама и интернет</div>
                </div>
            </div>

        </div>
    </div>

<!--    Конец категорий-->
<!--    Конец навигационного меню-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse ',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//            ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>

<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</div>-->
<!---->
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
