<?php

namespace BlogCore\Transformer\Request;

use BlogCore\Entity\LatestPostsRequestDTO;

class GetLatestPostsRequestTransformer extends RequestTransformer
{
    protected $requiredFields = array(
        'amount'
    );

    protected function _createDTO(array $data)
    {
        return new LatestPostsRequestDTO($data['amount']);
    }
}