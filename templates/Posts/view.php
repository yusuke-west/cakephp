<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Post $post
*/
?>
<div class="content">
  <p><?= h($post->created->i18nFormat('YYYY年MM月dd日 HH時mm分')) ?></p>
  <h1><?= h($post->title) ?></h1>
  <?= $this->Text->autoParagraph(h($post->description)) ?>
  <p><small>投稿者：<?= h($post->user->username) ?></small></p>
  <hr>
  <?= $this->HTML->link('一覧に戻る',[
        'action' => 'index'
      ],[
        'class' => 'button'
      ]) ?>
</div>
