<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Repository\PostRepositoryInterface;

class GetLatestPostsInteractor
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function execute($amount)
    {
        return $this->postRepository->findLatestPosts($amount);
    }
}