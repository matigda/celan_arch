<?php

namespace BlogCore\Entity;


class NewPostRequestDTO
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var text
     */
    protected $content;

    /**
     * @param string $title
     * @param text $content
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }
}