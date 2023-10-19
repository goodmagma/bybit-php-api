<?php 

namespace ByBit\SDK\Enums;

/**
 * contractType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#contracttype
 */
class ContractType {

    const INVERSEPERPETUAL  = 'InversePerpetual';
    const LINEARPERPETUAL   = 'LinearPerpetual';
    const LINEARFUTURES     = 'LinearFutures';  // USDC Futures
    const INVERSEFUTURES    = 'InverseFutures';

}