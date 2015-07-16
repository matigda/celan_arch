<?php

namespace BlogCore\Interactor\Post;


use BlogCore\Entity\PostRequestDTO;

class CreateAndSavePostInteractor
{
    /**
     * @var CreateNewPostInteractor
     */
    private $createNewPostInteractor;

    /**
     * @var SaveNewPostInteractor
     */
    private $saveNewPostInteractor;

    /**
     * @param CreateNewPostInteractor $createNewPostInteractor
     * @param SaveNewPostInteractor $saveNewPostInteractor
     */
    public function __construct(
        CreateNewPostInteractor $createNewPostInteractor,
        SaveNewPostInteractor $saveNewPostInteractor
    ){
        $this->createNewPostInteractor = $createNewPostInteractor;
        $this->saveNewPostInteractor = $saveNewPostInteractor;
    }

    /**
     * @param PostRequestDTO $dto
     *
     */
    public function execute(PostRequestDTO $dto)
    {
        $postEntity = $this->createNewPostInteractor->execute($dto);

        $this->saveNewPostInteractor->execute($postEntity);
    }
}