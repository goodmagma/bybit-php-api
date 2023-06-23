# PHP SDK for ByBit V5 API

The detailed document [https://bybit-exchange.github.io/docs/v5/intro](https://bybit-exchange.github.io/docs/v5/intro), in order to receive the latest API change notifications, please `Watch` this repository.


## Install

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/denistorresan/bybit-php-api.git"
    }
  ],
  "require": {
    "denistorresan/bybit-php-api": "*@dev"
  }
}
```

Then run `composer install`


## Run Example

Go to `examples` directory and copy `key_secret.php.sample` to `key_secret.php`.
Configure `key_secret.php` with your API Keys and run example like:

```
php Position.php
```


## License

[MIT](LICENSE)
