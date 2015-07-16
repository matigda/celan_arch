<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\Post;
use BlogCore\Repository\PostRepositoryInterface;

class SaveNewPostInteractor
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function execute(Post $post)
    {
        return $this->postRepository->save($post);
    }
}