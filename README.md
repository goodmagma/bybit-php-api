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


## Contributing

Contributions are what makes the open source community such an amazing place to learn, inspire and create. Any
contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## License


Distributed under the MIT License. See [LICENSE](LICENSE) for more information.


