<?php use yii\helpers\Html;
?>
<br>
<br>
<br>
<br>



<?php foreach ($arts as $art) {
    echo $art->title;
    echo Html::img("/web/uploads/{$art->image}", ['width'=>200]);
} ?>
