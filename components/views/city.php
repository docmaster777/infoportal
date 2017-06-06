<?php use yii\helpers\Html;?>

<div class="row">
    <?php foreach ($cities as $city): ?>
<div class="col-md-12">

    <?= '<li>'?>
    <?php echo Html::tag('a', Html::encode($city->title),['class' => 'city']);?>
</div>
<?php endforeach ?>
