[![Latest Version](https://img.shields.io/github/release/goodmagma/bybit-php-api.svg?style=flat-square)](https://github.com/goodmagma/bybit-php-api/releases) 
[![Latest commit](https://img.shields.io/github/last-commit/goodmagma/bybit-php-api.svg?style=flat-square)](#)
[![PHP Version](https://img.shields.io/packagist/php-v/goodmagma/bybit-php-api.svg?color=green)](https://secure.php.net)
[![Packagist Downloads](https://img.shields.io/packagist/dt/goodmagma/bybit-php-api.svg?style=flat-square)](https://packagist.org/packages/goodmagma/bybit-php-api)
[![License](https://poser.pugx.org/goodmagma/bybit-php-api/license)](LICENSE)

# PHP SDK for ByBit V5 API

The detailed API documentation can be found here [https://bybit-exchange.github.io/docs/v5/intro](https://bybit-exchange.github.io/docs/v5/intro). In order to receive the latest API change notifications, please `Watch` this repository.

## Implementation Status

This project is under development, and already used in production, but only the main API's are covered. I promise I'll do my best to complete the client with all ByBit V5 API's, but if you have time, any contributions are welcome!

Actually the API's completion status are the following:


 API Name                   | Completed | Since  |Doc Ref                                                  
----------------------------|-----------|--------|---------------------------------------------------
 Market API                 | 100%      | v0.1.0 | [Market API Doc](https://bybit-exchange.github.io/docs/v5/market/time)
 Trade API                  | 100%      | v0.1.0 | [Trade API Doc](https://bybit-exchange.github.io/docs/v5/order/create-order)
 Position API               | 100%      | v0.1.0 | [Position API Doc](https://bybit-exchange.github.io/docs/v5/position)
 Pre-Upgrade API            | 100%      | v0.2.0 | [Pre-Upgrade API Doc](https://bybit-exchange.github.io/docs/v5/pre-upgrade/order-list)
 Account API                | 100%      | v0.1.0 | [Account API Doc](https://bybit-exchange.github.io/docs/v5/account/wallet-balance)
 Asset API                  | 100%      | v0.2.0 | [Asset API Doc](https://bybit-exchange.github.io/docs/v5/asset/exchange)
 User API                   | 100%      | v0.1.0 | [Asset API Doc](https://bybit-exchange.github.io/docs/v5/user/create-subuid)
 Spot Leverage Token        | 100%      | v0.3.0 | [Spot Leverage Token API Doc](https://bybit-exchange.github.io/docs/v5/lt/leverage-token-info)
 Spot Margin Trade (UTA)    | 100%      | v0.4.0 | [Spot Margin Trade (UTA) API Doc](https://bybit-exchange.github.io/docs/v5/spot-margin-uta/vip-margin)
 Spot Margin Trade (Normal) | 100%      | v0.4.0 | [Spot Margin Trade (Normal) API Doc](https://bybit-exchange.github.io/docs/v5/spot-margin-normal/vip-margin)
 Institutional Lending      | 100%      | v0.5.0 | [Institutional Lending API Doc](https://bybit-exchange.github.io/docs/v5/otc/margin-product-info)
 C2C Lending                | 100%      | v0.5.0 | [C2C Lending API Doc](https://bybit-exchange.github.io/docs/v5/c2c-lend/coin-info)
 Broker                     | 0%        |        | [Broker API Doc](https://bybit-exchange.github.io/docs/v5/broker/earning)
 WebSocket Stream           | 0%        |        | [WebSocket Stream API Doc](https://bybit-exchange.github.io/docs/v5/ws/connect)


## Install

```
composer require goodmagma/bybit-php-api
```


## Getting started

### Create Public API Client

```php
include '../vendor/autoload.php';

use ByBit\SDK\ByBitApi;

//create public API on real environment
$bybitApi = new ByBitApi();

//create public API on sandbox environment
$bybitApi = new ByBitApi('', '', true);
```

### Create Private API Client

```php
include '../vendor/autoload.php';

use ByBit\SDK\ByBitApi;

//Input your API Key
$api_key = 'XXXXXXXXXX';

//Input your Secret Key
$api_secret = 'XXXXXXXXXX';

//Environment
$sandbox = true;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);
```


## Use API Client

```php
// Get Position Info
$params = ["category" => "linear", "symbol" => "BTCUSDT"];
$positions = $bybitApi->positionApi()->getPositionInfo($params);

var_dump($positions);
```

See [additional examples](examples)


## Run Examples

Go to `examples` directory and copy `key_secret.php.sample` to `key_secret.php`.
Configure `key_secret.php` with your API Keys and run example like:

```
php Position.php
```

## Contributing

Contributions are what makes the open source community such an amazing place to learn, inspire and create. Any
contributions you make are **greatly appreciated**.

- Give us a star :star:
- Fork and Clone! Awesome
- Select existing [issues](https://github.com/goodmagma/bybit-php-api/issues) or create a [new issue](https://github.com/goodmagma/bybit-php-api/issues/new) and give us a PR with your bugfix or improvement after. We love it ❤️

If you want to make a PR:

1. Fork the Project and checkout `develop` branch
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## License

Distributed under the MIT License. See [LICENSE](LICENSE) for more information.
