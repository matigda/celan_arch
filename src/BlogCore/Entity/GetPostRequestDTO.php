<?php

namespace BlogCore\Entity;


class GetPostRequestDTO
{
    private $requirements;

    public function __construct($requirements)
    {
        $this->requirements = $requirements;
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

}