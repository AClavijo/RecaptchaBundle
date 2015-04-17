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
    new AC\RecaptchaBundle\ACRecaptchaBundle(),
    
```

#Congifuration
```
config.yml
ac_repatcha:
    public_key:
    private_key:
    url_api:
```