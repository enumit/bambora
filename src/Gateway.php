<?php
namespace enumit\Bambora;

use enumit\Bambora\requests\PaymentRequest;
use enumit\Bambora\requests\ReportingRequest;

class Gateway
{
    public static function getPaymentRequest($merchantId, $passcode, $version)
    {
        return new PaymentRequest($merchantId, $passcode, $version);
    }

    public static function getReportingRequest($merchantId, $passcode, $version)
    {
        return new ReportingRequest($merchantId, $passcode, $version);
    }
}
