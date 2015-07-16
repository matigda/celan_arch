<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\LatestPostsRequestDTO;
use BlogCore\Repository\PostRepositoryInterface;

class GetLatestPostsInteractor
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function execute(LatestPostsRequestDTO $requestDTO)
    {
        return $this->postRepository->findLatestPosts($requestDTO->getAmount());
    }
}