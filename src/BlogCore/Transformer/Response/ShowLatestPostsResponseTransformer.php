<?php

namespace BlogCore\Transformer\Response;


use BlogCore\Entity\ShowLatestPostsResponseDTO;
use BlogCore\Entity\ShowPostResponseDTO;

class ShowLatestPostsResponseTransformer
{
    public function createDTO(array $entities)
    {
        $transferObjects = array();

        foreach($entities as $entity) {
            $transferObjects[] = new ShowPostResponseDTO($entity);
        }

        $responseDTO = new ShowLatestPostsResponseDTO($transferObjects);

        return $responseDTO;
    }
}