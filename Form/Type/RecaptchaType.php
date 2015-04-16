<?php

namespace AC\Bundle\RecaptchaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * @author  Antoine Clavijo <antoine.clavijo@gmail.com>
 */
class RecaptchaType extends AbstractType
{
    public function buildView(FormView $view, FormInterface $form, array $options)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ac_recaptcha';
    }
}