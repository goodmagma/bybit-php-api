<?php 

namespace ByBit\SDK\Enums;

/**
 * withdrawStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#withdrawstatus
 */
class WithdrawStatus {

    const SECURITYCHECK = 'SecurityCheck';
    const PENDING       = 'Pending';
    const SUCCESS       = 'success';
    const CANCELBYUSER  = 'CancelByUser';
    const REJECT        = 'Reject';
    const FAIL          = 'Fail';
    const BLOCKCHAINCONFIRMED   = 'BlockchainConfirmed';
    const UNKNOWN = 'Unknown';      // a rare status

}