<?php

namespace BlogCore\Interactor\Post;


use BlogCore\Entity\GetPostRequestDTO;
use BlogCore\Transformer\Response\ShowPostResponseTransformer;

class ShowPostInteractor
{
    /**
     * @var GetPostInteractor
     */
    private $getPostInteractor;

    /**
     * @var ShowPostResponseTransformer
     */
    private $responseTransformer;

    public function __construct(
        GetPostInteractor $getPostInteractor,
        ShowPostResponseTransformer $responseTransformer
    ){
        $this->getPostInteractor = $getPostInteractor;
        $this->responseTransformer = $responseTransformer;
    }

    public function execute(GetPostRequestDTO $requestDTO)
    {
        $postEntity = $this->getPostInteractor->execute($requestDTO);

        return $this->responseTransformer->createDTO($postEntity);
    }
}