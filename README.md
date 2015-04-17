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

#Congifuration
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