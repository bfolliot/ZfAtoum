ZfAtoum
=======

Zend Framework 2 module for Atoum unit testing framework


For now, we can just run tests for all modules in ./module

## Installation

## 1 - With composer

```json
{
    "require": {
        "bfolliot/zf-atoum": "dev-master"
    }
}
```

In most of the cases you don't need ZfAtoum in your production environment.

```json
{
    "require-dev": {
        "bfolliot/zf-atoum": "dev-master"
    }
}
```

## 2 - Command

ZfAtoum is provided with a Zend Framework console route.

### 2-a Registering in your application

Enabling it in your application.config.phpfile.

```php
<?php
return array(
    'modules' => array(
        // ...
        'ZfAtoum',
    ),
    // ...
);
```
### 2-c Command-line usage

Then you can use:

```shell
$ php ./public/index.php atoum # launch tests for your module (in ./module)
```

