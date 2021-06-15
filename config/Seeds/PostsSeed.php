<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'title' => '最初の投稿',
                'description' => "<script>alert('JavaScriptの実行');</script>\n最初の投稿の概要\n改行文章",
                'body' => '最初の投稿の内容',
                'published' => 1,
                'user_id' => 1,
                'created' => '2019-01-09 20:00:00',
                'modified' => '2019-01-09 20:00:00'
            ],[
                'title' => '2つ目の投稿',
                'description' => '２つ目の投稿の概要',
                'body' => '２つ目の投稿の内容',
                'published' => 1,
                'user_id' => 1,
                'created' => '2019-03-09 20:00:00',
                'modified' => '2019-03-09 20:00:00'
            ],[
                'title' => '3のタイトル',
                'description' => '3の投稿の概要',
                'body' => '3の投稿の内容',
                'published' => 1,
                'user_id' => 2,
                'created' => '2019-09-09 20:00:00',
                'modified' => '2019-09-09 20:00:00'
            ],[
                'title' => '非表示のタイトル',
                'description' => '非表示の投稿の概要',
                'body' => '非表示の投稿の内容',
                'published' => 0,
                'user_id' => 1,
                'created' => '2020-02-09 20:00:00',
                'modified' => '2020-02-09 20:00:00'
            ],[
                'title' => '5番目のタイトル',
                'description' => '5番目の投稿の概要',
                'body' => '5番目の投稿の内容',
                'published' => 1,
                'user_id' => 2,
                'created' => '2020-09-09 20:00:00',
                'modified' => '2020-09-09 20:00:00'
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
