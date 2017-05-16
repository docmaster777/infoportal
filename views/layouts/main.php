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
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl1.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 1</h3>
        <p class="sl__desc">Описание слайда № 1</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl2.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 2</h3>
        <p class="sl__desc">Описание слайда № 2</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl3.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 3</h3>
        <p class="sl__desc">Описание слайда № 3</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl4.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 4</h3>
        <p class="sl__desc">Описание слайда № 4</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl5.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 5</h3>
        <p class="sl__desc">Описание слайда № 5</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl6.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 6</h3>
        <p class="sl__desc">Описание слайда № 6</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl7.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 7</h3>
        <p class="sl__desc">Описание слайда № 7</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl8.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 8</h3>
        <p class="sl__desc">Описание слайда № 8</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl9.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 9</h3>
        <p class="sl__desc">Описание слайда № 9</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl10.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 10</h3>
        <p class="sl__desc">Описание слайда № 10</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl11.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 11</h3>
        <p class="sl__desc">Описание слайда № 11</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl12.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 12</h3>
        <p class="sl__desc">Описание слайда № 12</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl13.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 13</h3>
        <p class="sl__desc">Описание слайда № 13</p>
        </span></a></div>
        <div class="sl__slide"><a href="#"><img src="/web/images/slider/sl14.jpg" alt="картинка слайда #"
                                                class="sl__img"><span class="sl__text">
        <h3 class="sl__zag">Слайд 14</h3>
        <p class="sl__desc">Описание слайда № 14</p>
        </span></a></div>
    </div>


<!--    Конец слайдера-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
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
<!---->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</div>-->
<!---->
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
