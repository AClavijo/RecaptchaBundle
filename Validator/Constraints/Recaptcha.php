<?php

namespace AC\Bundle\RecaptchaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Recaptcha extends Constraints
{
    public $message = "Erreur lors de la validation du recaptcha";

    public function validateBy()
    {
        return get_class($this).'Validator';
    }
}