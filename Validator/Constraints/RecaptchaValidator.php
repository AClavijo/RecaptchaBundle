<?php

namespace AC\Bundle\RecaptchaBundle\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Antoine Clavijo <antoine.clavijo@gmail.com>
 */
class RecaptchaValidator extends ConstraintValidator
{
	protected $container;

	public function __construct(ContainerInterface $container){
		$this->container = $container;
	}

    public function validate($value, Constraint $constraint)
    {
        $this->context->addViolation($constraint->message);
    }
}