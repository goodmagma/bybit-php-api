<?php 

namespace ByBit\SDK\Enums;

/**
 * ltStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#ltstatus
 */
class LTStatus {

    const PURCHASED_REDEEMED = 1;       // LT can be purchased and redeemed
    const PURCHASED_ONLY = 2;           // LT can be purchased, but not redeemed
    const REDEEMED_ONLY = 3;            // LT can be redeemed, but not purchased
    const CANNOT_PURCHASED_REDEEMED = 4;// LT cannot be purchased nor redeemed
    const ADJUSTING_POSITION = 5;       // Adjusting position
    
}