<?php

namespace BlogCore\Entity;


class PostResponseDTO
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var text
     */
    protected $content;

    /**
     * @var \DateTime
     */
    protected $created;

    public function __construct(Post $post)
    {
        $this->id = $post->getId();
        $this->title = $post->getTitle();
        $this->content = $post->getContent();
        $this->created = $post->getCreated();
    }

    public function getId()
    {
        return $this->id;
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