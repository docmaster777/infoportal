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
        <div class="col-md-4 border-company">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <a href="<?=Url::to(['company/', 'id' => $article['id']] )?>" class="col-com lineItem rates-item">
                            <?= Html::img("/web/uploads/{$article->image}", ['width' => 180,'alt' => $article->title, 'class' => 'img-content']) ?>
                            <?= Html::tag('div', Html::encode($article->title),['class' => 'title-company']);?>
                            <?= Html::tag('div', Html::encode($article->adress),['class' => 'address-company']);?>
                    </a>
                <?php endforeach; ?>
                <?php else: ?><p>Сдесь пока что пусто</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--Конец блока вывода списка компаний-->






