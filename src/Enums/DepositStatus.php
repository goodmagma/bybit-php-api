<?php 

namespace ByBit\SDK\Enums;

/**
 * depositStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#depositstatus
 */
class DepositStatus {

    const UNKNOWN = 0;
    const TOBECONFIRMED = 1;
    const PROCESSING = 2;
    const SUCCESS = 3;          // success (finalised status of a success deposit)
    const DEPOSIT_FAILED = 4;
    const PENDING = 10011;      // pending to be credited to funding pool
    const CREDITED = 10012;     // Credited to funding pool successfully
    
}