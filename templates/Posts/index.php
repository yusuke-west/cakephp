<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Post[] $posts
*/
?>
<div class="content">
  <?php foreach ($posts as $post): ?>
    <h3><?= h($post->title) ?></h3>
    <p><?= h($post->created->i18nFormat('YYYY年MM月dd日 HH時mm分')) ?></p>
    <?= $this->Text->autoParagraph(h($post->description)) ?>
    <p><small>投稿者：<?= h($post->user->username) ?></small></p>
    <!-- aタグでボタンを挿入 -->
    <!-- <a href="/Posts/view/<?= $post->id ?>" class="button" >記事を読む</a> -->
    <?= $this->HTML->link('記事の詳細',[
      'action' => 'view',
      $post->id
    ],[
      'class' => 'button'
    ]) ?>
    <hr>
  <?php endforeach; ?>

  <?php if($this->Paginator->total() > 1): ?>
    <div class="paginator">
      <ul class="pagination">
        <?= $this->Paginator->first('<<最初') ?>
        <?= $this->Paginator->prev('<前へ') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('次へ>') ?>
        <?= $this->Paginator->last('最後>>') ?>
      </ul>
    </div>
  <?php endif; ?>
</div>
