<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\GetPostRequestDTO;
use BlogCore\Repository\PostRepositoryInterface;


class GetPostInteractor
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param GetPostRequestDTO $dto
     * @return \BlogCore\Entity\Post | null
     */
    public function execute(GetPostRequestDTO $dto)
    {
        return $this->postRepository->findOneBy($dto->getRequirements());
    }
}