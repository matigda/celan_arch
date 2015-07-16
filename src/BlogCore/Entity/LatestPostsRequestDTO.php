<?php

namespace BlogCore\Entity;


class LatestPostsRequestDTO
{
    /**
     * @var
     */
    private $amount;

    /**
     * @var int $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}