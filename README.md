Recaptcha Bundle
=================

#Installation 

```
composer.json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:AClavijo/RecaptchaBundle.git"
    }
],
"required": {
    ...
    "aclavijo/recaptcha-bundle" : "dev-master"
}
```

Add it into AppKernel.php:

```php
    ...
    new AC\Bundle\RecaptchaBundle\ACRecaptchaBundle(),
    
```

#Configuration
```
config.yml
ac_repatcha:
    public_key: %api_public_key%
    private_key: %api_private_key%
    url_api: %js_api_url%
```

#How to use it

```php
    $builder->add('captcha', 'ac_recaptcha', array(
        'mapped' => false,
    ));
```
adding constraint to server side validation
```php
    use AC\Bundle\RecaptchaBundle\Validator\Constraints\Recaptcha;

    ...

    $builder->add('captcha', 'ac_recaptcha', array(
        'mapped' => false,
        'constraints' => array(
                new Recaptcha(),
        ),
    ));

    ...
```