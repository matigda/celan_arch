<?php

namespace AppBundle\Validator;

use BlogCore\Interactor\Post\PostValidatorInteractor;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class PostValidator
{
    public static function validate($object, ExecutionContextInterface $context)
    {
        $errors = PostValidatorInteractor::execute($object);

        if(count($errors) > 0) {
            foreach($errors as $field => $errorsList) {
                foreach($errorsList as $error) {
                    $context->buildViolation($error->getMessage())
                        ->atPath($field)
                        ->addViolation();
                }
            }
        }
    }
}