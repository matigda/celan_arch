<?php

namespace BlogCore\Interactor\Post;

use BlogCore\Entity\Post;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class PostValidatorInteractor
{
    private static $errors;
    private static $validator;

    public static function execute(Post $post)
    {
        self::$validator = Validation::createValidator();
        $rules = self::getRules();

        foreach($rules as $field => $rule) {
            self::validateField($field, $rule, $post);
        }

        return self::$errors;
    }

    private static function getRules()
    {
        $rules = array(
            'title' => array(new Assert\NotBlank()),
            'content' => array(new Assert\NotBlank()),
        );

        return $rules;
    }

    private static function validateField($field, $rule, $post)
    {
        $fieldGetter = 'get' . ucfirst($field);
        $fieldErrors = self::$validator->validate($post->$fieldGetter(), $rule);
        if(count($fieldErrors) > 0) {
            self::$errors[$field] = $fieldErrors;
        }
    }
}