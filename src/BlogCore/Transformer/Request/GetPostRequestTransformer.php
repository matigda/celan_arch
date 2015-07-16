<?php

namespace BlogCore\Transformer\Request;

use BlogCore\Entity\GetPostRequestDTO;

class GetPostRequestTransformer extends RequestTransformer
{
    protected $requiredFields = array(
        'id'
    );

    protected function _createDTO(array $data)
    {
        return new GetPostRequestDTO($data);
    }
}