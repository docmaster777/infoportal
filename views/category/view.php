<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="container">
<!--Блок компаний-->
    <div class="row">
        <div class="col-md-4 all-cat">
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
            <a href="<?=Url::to(['category/company/', 'id' => $article['id']])?>"><div class="col-md-4 one-company">
                <div class="col-com lineItem rates-item">
                    <div class="item item-company-map">
                        <?php if (!empty($articles)): ?>
                            <?php foreach ($articles as $article): ?>
                                <p class="cat-img">
                                    <?= Html::img("/web/uploads/{$article->image}", ['width' => 200,'alt' => $article->title]) ?>
                                </p>
                                <p>
                                    <h4><?=$article->title;?></h4>
                                </p>

                                <p>
                                    <?=$article->adress;?>
                                </p>
                            <?php endforeach; ?>

                            <?php else: ?><p>Сдесь пока что пусто</p>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
        </div>
<!--Конец блока вывода списка компаний-->
    </div>
</div>






