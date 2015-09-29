<?php

namespace AC\Bundle\RecaptchaBundle\Validator\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Antoine Clavijo <antoine.clavijo@gmail.com>
 */
class RecaptchaValidator extends ConstraintValidator
{
	const RECAPTCHA_VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';

	protected $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

    public function validate($value, Constraint $constraint)
    {
    	
    	$args = array(
    		'secret' => $this->container->getParameter('ac_recaptcha.private_key'),
    		'response' => $this->container->get('request')->request->get('g-recaptcha-response'),
    		'remoteip' => $this->container->get('request')->getClientIp(),
		);
    	
		//open connection
		$ch =  curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, self::RECAPTCHA_VERIFY_URL);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_POST, count($args));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $args);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);

		$result = json_decode($result);
		if($result->success === false){
			$this->context->addViolation($constraint->message);
		}
    }
}