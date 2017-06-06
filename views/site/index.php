<?php
use app\components\AdsWidget;
use app\components\CategoryWidget;
use app\components\MenuWidget;
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
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

<!--    Категории-->
<!--    <div class="container">-->
<!--        <div id="category collapse">-->
<!--                <div class="caption">-->
<!--                    Выберите категорию-->
<!--                </div>-->
<!--        </div>-->
<div class="row">
    <div class="col-md-12 category-collapse">ВЫБЕРИТЕ КАТЕГОРИЮ</div>
</div>

<!--    </div>-->

<!--<nav class="navbar navbar-default" role="navigation">-->
<!--    <div class="container">-->
<!--        <!-- Brand and toggle get grouped for better mobile display -->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="#">Выберите категорию</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

    <div class="row">
        <?= CategoryWidget::widget()?>
    </div>
<!--    Конец категорий-->

<!--Объявления-->

<!--<h3 class="ads">Объявления</h3>-->
<!---->
<!--<div class="ads">-->
<!--    --><?php //foreach ($arts as $art)
//    {
//        echo '<div class="ads">';
//        echo Html::tag('h3', Html::encode($art->title),['class' => 'text']);
//        echo Html::tag('p', Html::encode($art->description),['class' => 'description']);
//            if ($art->image != Null)
//            {
//            echo Html::img("/web/uploads/{$art->image}", ['width'=>400]);
//            echo '<hr size="10px" />';
//            }
//        echo '</div>';
//    } ?>
<!---->
<!--</div>-->
<!--Объявления конец-->
