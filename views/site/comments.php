<?php
    use yii\widgets\LinkPager;
?>
<h1>Коментарии</h1>
<ul>
<?php foreach ($comments as $comment){?>
<li><b><a href="<?=Yii::$app->urlManager->createUrl(['site/user', 'name'=> $comment->name])?>"><?=$comment->name?>:</b><?=$comment->text?></li>
<?php } ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination])?>
