<?php 

namespace ByBit\SDK\Enums;

/**
 * category enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#category
 */
class Category {

    const SPOT = 'spot';
    const LINEAR = 'linear';    // USDT perpetual, and USDC contract, including USDC perp, USDC futures
    const INVERSE = 'inverse';  // Inverse contract, including Inverse perp, Inverse futures
    const OPTION = 'option';    

}