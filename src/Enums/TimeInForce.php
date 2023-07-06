<?php 

namespace ByBit\SDK\Enums;

/**
 * timeInForce enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#timeinforce
 */
class TimeInForce {

    const GTC = 'GTC';  // GoodTillCancel
    const IOC = 'IOC';  // ImmediateOrCancel
    const FOK = 'FOK';  // FillOrKill
    const POSTONLY = 'PostOnly';

}