<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleServiceRepository implements ArticleRepositoryInterface
{


    public function __construct(protected Article $article)
    {
    }

    public function get()
    {
        return $this->article->latest()->get();
    }
}
