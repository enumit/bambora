<?php
namespace enumit\Bambora;

use enumit\Bambora\requests\PaymentRequest;

class Gateway
{
    public static function getPaymentRequest($merchantId, $passcode)
    {
        return new PaymentRequest($merchantId, $passcode);
    }
}
