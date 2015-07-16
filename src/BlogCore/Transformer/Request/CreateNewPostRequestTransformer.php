<?php

namespace BlogCore\Transformer\Request;

use BlogCore\Entity\NewPostRequestDTO;

class CreateNewPostRequestTransformer extends RequestTransformer
{
    protected $requiredFields = array(
        'title', 'content'
    );

    protected function _createDTO(array $data)
    {
        return new NewPostRequestDTO($data['title'], $data['content']);
    }
}