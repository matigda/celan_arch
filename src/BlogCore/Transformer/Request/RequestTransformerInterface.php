<?php

namespace BlogCore\Transformer\Request;


interface RequestTransformerInterface
{
    public function createDTO(array $data);
}