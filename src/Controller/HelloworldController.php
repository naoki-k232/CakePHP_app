<?php
namespace App\Controller;

class HelloworldController extends AppController
{
// ...
    public function index()
    {
        // templates/Recipes/search.php のビューを描画します
        return $this->render('hello');
    }
// ...
}