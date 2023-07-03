<?php 

namespace ByBit\SDK\Enums;

class Category {

    const SPOT = 'spot';
    const LINEAR = 'linear';    // USDT perpetual, and USDC contract, including USDC perp, USDC futures
    const INVERSE = 'inverse';  // Inverse contract, including Inverse perp, Inverse futures
    const OPTION = 'option';    

}