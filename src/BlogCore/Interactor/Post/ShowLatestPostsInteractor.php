<?php

namespace BlogCore\Interactor\Post;


use BlogCore\Entity\LatestPostsRequestDTO;
use BlogCore\Transformer\Response\ShowLatestPostsResponseTransformer;

class ShowLatestPostsInteractor
{
    private $getLatestPostsInteractor;

    private $responseTransformer;

    public function __construct(
        GetLatestPostsInteractor $getLatestPostsInteractor,
        ShowLatestPostsResponseTransformer $responseTransformer
    ){
        $this->getLatestPostsInteractor = $getLatestPostsInteractor;
        $this->responseTransformer = $responseTransformer;
    }

    public function execute(LatestPostsRequestDTO $requestDTO)
    {
        $entities = $this->getLatestPostsInteractor->execute($requestDTO);

        $responseDTO = $this->responseTransformer->createDTO($entities);

        return $responseDTO->toArray();
    }
}