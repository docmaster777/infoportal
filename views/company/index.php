<?php
use yii\helpers\Html;use yii\helpers\Url;

?>
<div class="row">
    <div class="row-companies">
        <div class="col-md-8 one-company">
            <div class="companies-caption">
                <div class="companies-name">

                </div>
            </div>

            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#cardCompany">Описание</a></li>
<!--                <li role="presentation"><a href="#two-text">Акции</a></li>-->
<!--                <li role="presentation"><a href="#">Объявления</a></li>-->
            </ul>

            <div class="tab-content">
                <div class="cardCompany-imgContent" id="cardCompany">
                    <?php foreach ($article as $art): ?>
                            <?= Html::img("/web/uploads/{$art->image}", ['alt' => $article->title, 'class' => 'img-content']) ?>

                    <?php endforeach; ?>


                    <div class="companies-text">
                        <h2><?= Html::tag('div', Html::encode($art->title),['class' => 'title-company-one']);?></h2>
                        <?= Html::tag('div', Html::encode($art->description),['class' => 'description-company-one']);?>
                    </div>
                </div>





<!--                <div class="two-text" id="two-text">-->
<!--                    Акции-->
<!--                </div>-->
            </div>
        </div>

        <div class="col-md-4 contact">
            <div class="comp-inf-right">
                <div class="company-inf-col1">
                    <span class="icon-call-end"></span><span class="tell">Телефоны:</span>
                    <p><span class="tell-number">0660211438</span></p>
                </div>

                <div class="company-inf-col2">
                    <span class="icon-map"></span><span class="addres">Адрес:</span>
                    <p><?= Html::tag('span', Html::encode($art->adress),['class' => 'addres-number']);?></p>
                </div>

                <div class="company-inf-col3">
                    <span class="icon-globe"></span><span class="link">Ссылки:</span>
                    <p><?= Html::tag('span', Html::encode($art->adress),['class' => 'addres-number']);?></p>
                </div>

                <div class="company-inf-col4">
                    <span class="icon-clock"></span><span class="clock">График работы:</span>
                    <p><?= Html::tag('span', Html::encode($art->adress),['class' => 'addres-number']);?></p>
                    <p></p><span class=" ">Рабочии дни:</span></p>
                    <p><span class=" ">Выходной:</span></p>
                </div>
            </div>

        </div>
</div>
