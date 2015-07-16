<?php

namespace BlogCore\Entity;


class ShowLatestPostsResponseDTO
{
    private $transferObjects;

    public function __construct(array $transferObjects)
    {
        $this->transferObjects = $transferObjects;
    }

    public function toArray()
    {
        return $this->transferObjects;
    }
}