<?php 

namespace ByBit\SDK\Enums;

/**
 * unifiedMarginStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#unifiedmarginstatus
 */
class UnifiedMarginStatus {

    const REGULAR = 1;          // Regular account
    const UNIFIED_MARGIN = 2;   // Unified margin account, it only trades linear perpetual and options.
    const UNIFIED_TRADING = 3;  // Unified trade account, it can trade linear perpetual, options and spot
    const UTA_PRO = 4;          // UTA Pro, the pro version of Unified trade account

}