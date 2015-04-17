<?php

namespace AC\Bundle\RecaptchaBundle\Form\Type;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author  Antoine Clavijo <antoine.clavijo@gmail.com>
 */
class RecaptchaType extends AbstractType
{
    /**
     * Recaptcha public key
     * @var string
     */
    protected $publicKey;

    /**
     * Recaptcha private key
     * @var string
     */
    protected $privateKey;

    /**
     * Google Recaptcha API
     * @var string
     */
    protected $urlApi;

    public function __construct(ContainerInterface $container)
    {
        $this->publicKey  = $container->getParameter('ac_recaptcha.public_key');
        $this->privateKey = $container->getParameter('ac_recaptcha.private_key');
        $this->urlApi     = $container->getParameter('ac_recaptcha.url_api');
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array(
            'public_key' => $this->publicKey,
            'url_api' => $this->urlApi,
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'public_key'    => null,
            'url_api' => null,
        ));
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