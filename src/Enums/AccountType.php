<?php 

namespace ByBit\SDK\Enums;

/**
 * accountType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#accounttype
 */
class AccountType {

    const CONTRACT = 'CONTRACT';// Derivatives Account
    const UNIFIED = 'UNIFIED';  // UMA or UTA
    const FUND = 'FUND';        // Funding Account

    const SPOT = 'SPOT';        // Spot Account
    const OPTION = 'OPTION';    // USDC Account

}