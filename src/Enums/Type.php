<?php 

namespace ByBit\SDK\Enums;

/**
 * type enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#type
 */
class Type {

    const TRANSFER_IN= 'TRANSFER_IN';
    const TRANSFER_OUT= 'TRANSFER_OUT';
    const TRADE= 'TRADE';
    const SETTLEMENT= 'SETTLEMENT';
    const DELIVERY= 'DELIVERY';
    const LIQUIDATION= 'LIQUIDATION';
    const BONUS= 'BONUS';
    const FEE_REFUND= 'FEE_REFUND';
    const INTEREST= 'INTEREST';
    const CURRENCY_BUY= 'CURRENCY_BUY';
    const CURRENCY_SELL= 'CURRENCY_SELL';
    const BORROWED_AMOUNT_INS_LOAN= 'BORROWED_AMOUNT_INS_LOAN';
    const PRINCIPLE_REPAYMENT_INS_LOAN= 'PRINCIPLE_REPAYMENT_INS_LOAN';
    const INTEREST_REPAYMENT_INS_LOAN= 'INTEREST_REPAYMENT_INS_LOAN';
    const AUTO_SOLD_COLLATERAL_INS_LOAN= 'AUTO_SOLD_COLLATERAL_INS_LOAN';
    const AUTO_BUY_LIABILITY_INS_LOAN= 'AUTO_BUY_LIABILITY_INS_LOAN';
    const AUTO_PRINCIPLE_REPAYMENT_INS_LOAN= 'AUTO_PRINCIPLE_REPAYMENT_INS_LOAN';
    const AUTO_INTEREST_REPAYMENT_INS_LOAN= 'AUTO_INTEREST_REPAYMENT_INS_LOAN';
    const TRANSFER_IN_INS_LOAN= 'TRANSFER_IN_INS_LOAN';     // Transfer In when in the liquidation of OTC loan
    const TRANSFER_OUT_INS_LOAN= 'TRANSFER_OUT_INS_LOAN';   // Transfer Out when in the liquidation of OTC loan
    const SPOT_REPAYMENT_SELL= 'SPOT_REPAYMENT_SELL';       // One-click repayment currency sell
    const SPOT_REPAYMENT_BUY= 'SPOT_REPAYMENT_BUY';         // One-click repayment currency buy

}