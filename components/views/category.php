<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php foreach ($category as $cat): ?>
    <div class="col-md-2 col-cat">
        <a href="<?=Url::to(['category/view/', 'id' => $cat['id']])?>">
            <?=$cat['title']?>
        </a>
    </div>

<?php endforeach ?>


