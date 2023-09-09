<?php 

namespace ByBit\SDK\Enums;

/**
 * stopOrderType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#stopordertype
 */
class StopOrderType {

    const TAKEPROFIT = 'TakeProfit';
    const STOPLOSS = 'StopLoss';
    const TRAILINGSTOP = 'TrailingStop';
    const STOP = 'Stop';
    const PARTIALTAKEPROFIT = 'PartialTakeProfit';
    const PARTIALSTOPLOSS = 'PartialStopLoss';
    const TPSLORDER = 'tpslOrder';  // spot TP/SL order

}