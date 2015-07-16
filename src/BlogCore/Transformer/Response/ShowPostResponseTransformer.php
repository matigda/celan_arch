<?php

namespace BlogCore\Transformer\Response;


use BlogCore\Entity\Post;
use BlogCore\Entity\ShowPostResponseDTO;

class ShowPostResponseTransformer
{
    public function createDTO(Post $post)
    {
        return new ShowPostResponseDTO($post);
    }
}