<?php

namespace AC\Bundle\RecaptchaBundle\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @author Antoine Clavijo <antoine.clavijo@gmail.com>
 */
class RecaptchaValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $this->context->addViolation($constraint->message);
    }
}