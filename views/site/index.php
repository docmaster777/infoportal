<?php
//use app\components\AdsWidget;

?>
<!--    Слайдер-->

<!--<div class="sl">-->
<!--    <div class="sl__slide"><a href="#"><img src="/web/images/slider/1.jpg" alt="картинка слайда #"-->
<!--                                            class="sl__img"><span class="sl__text">-->
<!--        <h3 class="sl__zag">Слайд 1</h3>-->
<!--        <p class="sl__desc">Описание слайда № 1</p>-->
<!--        </span></a></div>-->
<!--    <div class="sl__slide"><a href="#"><img src="/web/images/slider/2.jpg" alt="картинка слайда #"-->
<!--                                            class="sl__img"><span class="sl__text">-->
<!--        <h3 class="sl__zag">Слайд 2</h3>-->
<!--        <p class="sl__desc">Описание слайда № 2</p>-->
<!--        </span></a></div>-->
<!--    <div class="sl__slide"><a href="#"><img src="/web/images/slider/3.jpg" alt="картинка слайда #"-->
<!--                                            class="sl__img"><span class="sl__text">-->
<!--        <h3 class="sl__zag">Слайд 3</h3>-->
<!--        <p class="sl__desc">Описание слайда № 3</p>-->
<!--        </span></a></div>-->
<!--</div>-->
<!--    Конец слайдера-->

<!--    Категории-->
<!--<div id="category">-->
<!--        <div class="caption">-->
<!--            Выберите категорию-->
<!--        </div>-->
<!--    --><?//=MenuWidget::widget(['tpl'=>'menu'])?>
<!--</div>-->
<!--    Конец категорий-->

<!--Объявления-->

<!--<div class="ads">-->
<!--    --><?//=AdsWidget::widget(['data'])?>
<!--</div>-->
<!--Объявления конец-->

<!--var_dump($a);-->
<?//= debug($article)?>
<?php foreach ($article as $art ){
    echo $art -> title;
}?>
<!--    <li>--><?//=$art->title?><!--</li>-->
