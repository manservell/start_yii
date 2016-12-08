<?php
    use yii\widgets\LinkPager;
?>
<h1>Коментарии</h1>
<ul>
<?php foreach ($comments as $comment){?>
<li><b><?=$comment->name?>:</b><?=$comment->text?></li>
<?php } ?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination])?>
