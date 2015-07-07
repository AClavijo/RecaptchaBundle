<?php

namespace AC\Bundle\RecaptchaBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Recaptcha extends Constraint
{
    public $message = "Erreur lors de la validation du recaptcha";

    public function validateBy()
    {
        return 'ac_recaptcha_validator';
    }
}