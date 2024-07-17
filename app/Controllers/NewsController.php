<?php

namespace App\Controllers;

use App\Models\News;

class NewsController
{
    private ?News $model = null;

    public function __construct()
    {
        $this->model = new News();
    }

    public function index(): void
    {
        $numPage = !empty($_GET['page']) ? (int) $_GET['page'] : 1;
        $news = $this->model->getNews($numPage);
        $last = $this->model->getLastNews();
        $count = $this->model->getCountNews();
        $page = 'news.php';
        include 'views/base.php';
    }

    public function show($id): void
    {
        $news = $this->model->getNewsById($id);
        $page = 'article.php';
        include 'views/base.php';
    }
}