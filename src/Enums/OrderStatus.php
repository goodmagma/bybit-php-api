<?php 

namespace ByBit\SDK\Enums;

/**
 * orderStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#orderstatus
 */
class OrderStatus {

    const CREATED = 'Created';      // order has been accepted by the system but not yet put through the matching engine
    const NEW = 'New';              // order has been placed successfully
    const REJECTED = 'Rejected';
    const PARTIALLY_FILLED = 'PartiallyFilled';
    const PARTIALLY_FILLED_CANCELLED = 'PartiallyFilledCanceled';   // Only spot has this order status
    const FILLED = 'Filled';
    const CANCELLED = 'Cancelled';  // In derivatives, orders with this status may have an executed qty
    const UNTRIGGERED = 'Untriggered';
    const TRIGGERED = 'Triggered';
    const DEACTIVATED = 'Deactivated';
    const ACTIVE = 'Active';        // order has been triggered and the new active order has been successfully placed. Is the final state of a successful conditional order

}