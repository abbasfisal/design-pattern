<?php

namespace App\Repositories;

use Illuminate\Cache\CacheManager;

class ArticleCacheRepository implements ArticleRepositoryInterface
{
    const TTL = 1440;

    public function __construct(protected CacheManager $cache, protected ArticleRepositoryInterface $articleRepository)
    {
    }

    public function get()
    {
       return $this->cache->remember('articles', self::TTL, function () {
            return $this->articleRepository->get();
        });
    }
}
