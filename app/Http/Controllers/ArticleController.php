<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleCacheRepository;
use App\Repositories\ArticleRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{

    public function __construct(protected ArticleRepositoryInterface $articleRepository,
                                protected ArticleCacheRepository     $articleCache)
    {
    }


    public function get()
    {
        return $this->articleCache->get();
    }
}
