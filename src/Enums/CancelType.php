<?php 

namespace ByBit\SDK\Enums;

/**
 * accountType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#canceltype
 */
class CancelType {

    const CANCELBYUSER = 'CancelByUser';
    const CANCELBYREDUCEONLY = 'CancelByReduceOnly';
    const CANCELBYPREPARELIQ = 'CancelByPrepareLiq';    // Cancelled due to liquidation
    const CANCELALLBEFORELIQ = 'CancelAllBeforeLiq';    // Cancelled due to liquidation
    const CANCELBYPREPAREADL = 'CancelByPrepareAdl';    // Cancelled due to ADL
    const CANCELALLBEFOREADL = 'CancelAllBeforeAdl';    // Cancelled due to ADL
    const CANCELBYADMIN = 'CancelByAdmin';
    const CANCELBYTPSLTSCLEAR = 'CancelByTpSlTsClear';
    const CANCELBYPZSIDECH = 'CancelByPzSideCh';
    const CANCELBYSMP = 'CancelBySmp';

}