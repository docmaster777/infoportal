<?php
use yii\widgets\LinkPager;
?>

<?php foreach ($articles as $article ):?>
    <?= $article->title;?>
    <?= $article->categoty->title;?>

<?php endforeach;?>

<?php
    echo LinkPager::widget([
        'pagination' => $pagination,
    ]);
?>


<p>Lorem am. Officia, vero?</p>
