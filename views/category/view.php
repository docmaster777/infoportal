<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="container">
<!--Блок компаний-->
    <div class="row">
        <div class="col-md-4">
            <div class="navbar-collapse-catalog">
                <ul class="category-group">
                    <?php foreach ($category as $cat): ?>
                        <li class="item">
                            <a href="<?=Url::to(['category/view/', 'id' => $cat['id']])?>">
                                <?=$cat['title']?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
<!--Конец блока компаний-->

<!--Блок вывода списка компаний-->
        <div class="col-md-4 one-company">
            <div class="col-com lineItem rates-item">
                <div class="item item-company-map">
                    <?php if (!empty($articles)): ?>
                        <?php foreach ($articles as $article): ?>
                            <?=$article->title;?>
                            <?= Html::img("/web/uploads/{$article->image}", ['alt' => $article->title]) ?>
                        <?php endforeach; ?>

                        <?php else: ?><p>Сдесь пока что пусто</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<!--Конец блока вывода списка компаний-->

<!--        <div class="col-md-4">-->
            3 block


<!--        </div>-->
    </div>
</div>
<div id="map" style="width: 100px; height: 100px"></div>





