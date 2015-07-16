<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\GetPostRequestDTO;
use BlogCore\Repository\PostRepositoryInterface;


class GetPostInteractor
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function execute(GetPostRequestDTO $dto)
    {
        return $this->postRepository->findOneBy($dto->getRequirements());
    }
}