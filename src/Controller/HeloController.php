<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
	public function index()
	{
		$id = $this->request->query('id');
		$name = $this->request->query('name');
		$this->set('message', 'your id:' . $id . ', name:' . $name);
	}

	public function err()
	{
		$this->autoRender = false;
		echo "<html><head></head><body>";
		echo "<h1>Hello!</h1>";
		echo "<p>パラメータがありませんでした。</p>";
		echo "</body></html>";
	}
}
