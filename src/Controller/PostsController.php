<?php
namespace App\Controller;

class PostsController extends AppController {

  // レイアウトの変更
  // public function initialize() :void
  // {
  //   parent::initialize();
  //   $this->viewBuilder()->setLayout('test');
  // }

  public $paginate = [
    'limit' => 2,
    'order' => [
      'created' => 'desc'
    ]
  ];

  public function index()
  {
    $posts = $this->paginate($this->Posts->find());
    // 記事の検索
    // ->where([
      // 'title Like' => '%投稿%',
      // 'published' => true
      // ]);
    $this->set(compact('posts'));
  }

  public function view($id = null)
  {
    $post = $this->Posts->get($id);

    $this->set(compact('post'));
  }
}
