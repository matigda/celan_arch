<?php

namespace BlogCore\Transformer\Response;


use BlogCore\Entity\Post;
use BlogCore\Entity\PostResponseDTO;

class ShowPostResponseTransformer
{
    public function createDTO(Post $post)
    {
        return new PostResponseDTO($post);
    }
}