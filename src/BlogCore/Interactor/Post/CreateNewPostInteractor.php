<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\Post;
use BlogCore\Entity\PostRequestDTO;

class CreateNewPostInteractor
{
    public function execute(PostRequestDTO $postDTO)
    {
        return new Post($postDTO->getTitle(), $postDTO->getContent());
    }
}