<?php 

namespace ByBit\SDK\Enums;

/**
 * orderType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#ordertype
 */
class OrderType {

    const MARKET = 'Market';
    const LIMIT = 'Limit';
    const UNKNOWN = 'UNKNOWN';  //is not a valid request parameter value. Is only used in some responses. Mainly, it is used when execType is Funding.
}