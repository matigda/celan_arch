<?php

namespace BlogCore\Transformer\Request;


abstract class RequestTransformer implements RequestTransformerInterface
{
    protected $requiredFields = array();

    public function createDTO(array $data)
    {
        if(count(array_diff($this->getRequiredFields(), array_keys($data))) > 0) {
            throw new ImproperSchemaException('Array doesn\'t have required fields');
        }

        $dto = $this->_createDTO($data);

        return $dto;
    }

    abstract protected function _createDTO(array $data);

    private function getRequiredFields()
    {
        return $this->requiredFields;
    }
}