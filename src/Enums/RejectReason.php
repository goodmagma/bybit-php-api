<?php 

namespace ByBit\SDK\Enums;

/**
 * rejectReason enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#rejectreason
 */
class RejectReason {

    const EC_NOERROR = 'EC_NoError';
    const EC_OTHERS = 'EC_Others';
    const EC_UNKNOWNMESSAGETYPE = 'EC_UnknownMessageType';
    const EC_MISSINGCLORDID = 'EC_MissingClOrdID';
    const EC_MISSINGORIGCLORDID = 'EC_MissingOrigClOrdID';
    const EC_CLORDIDORIGCLORDIDARETHESAME = 'EC_ClOrdIDOrigClOrdIDAreTheSame';
    const EC_DUPLICATEDCLORDID = 'EC_DuplicatedClOrdID';
    const EC_ORIGCLORDIDDOESNOTEXIST = 'EC_OrigClOrdIDDoesNotExist';
    const EC_TOOLATETOCANCEL = 'EC_TooLateToCancel';
    const EC_UNKNOWNORDERTYPE = 'EC_UnknownOrderType';
    const EC_UNKNOWNSIDE = 'EC_UnknownSide';
    const EC_UNKNOWNTIMEINFORCE = 'EC_UnknownTimeInForce';
    const EC_WRONGLYROUTED = 'EC_WronglyRouted';
    const EC_MARKETORDERPRICEISNOTZERO = 'EC_MarketOrderPriceIsNotZero';
    const EC_LIMITORDERINVALIDPRICE = 'EC_LimitOrderInvalidPrice';
    const EC_NOENOUGHQTYTOFILL = 'EC_NoEnoughQtyToFill';
    const EC_NOIMMEDIATEQTYTOFILL = 'EC_NoImmediateQtyToFill';
    const EC_PERCANCELREQUEST = 'EC_PerCancelRequest';
    const EC_MARKETORDERCANNOTBEPOSTONLY = 'EC_MarketOrderCannotBePostOnly';
    const EC_POSTONLYWILLTAKELIQUIDITY = 'EC_PostOnlyWillTakeLiquidity';
    const EC_CANCELREPLACEORDER = 'EC_CancelReplaceOrder';
    const EC_INVALIDSYMBOLSTATUS = 'EC_InvalidSymbolStatus';

}