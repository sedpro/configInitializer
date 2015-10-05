# configInitializer
Several files enabling config initialization in zf2

Use
------------
Add `Config` folder to `module/Application/src/Application`

In file `module.config.php` add this initializer:

```php
  'service_manager' => [
    'initializers' => [
        'Application\Config\ConfigAwareInterfaceInitializer',
    ],
    ...
  ],
```

Any class in namespace `Application\Service` can now implement `\Application\Config\ConfigAwareInterface` interface. You can use trait `\Application\Config\ConfigAware`:

```php 
  class SimpleService implements \Application\Config\ConfigAwareInterface
  {
    use \Application\Config\ConfigAware;
    ...
```

You can now get your application config from this class:
```php
  $config = $this->getConfig();
```

PROFIT!!!
