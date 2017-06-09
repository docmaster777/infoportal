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

                    <hr class="hr-color">

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
                <div class="company-inf-col">
                    tel
                </div>

                <?= Html::tag('div', Html::encode($art->adress),['class' => 'address-company-one']);?>
            </div>

        </div>
</div>
