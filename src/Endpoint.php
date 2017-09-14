<?php
namespace enumit\Bambora;

class Endpoint
{
    const BASE_URL  = 'https://api.na.bambora.com/';

    protected $paymentUrl;
    protected $reportUrl;
    protected $profileUrl;
    protected $tokenizationUrl;

    protected $makePaymentMethod = 'POST';
    protected $returnPaymentMethod = 'POST';
    protected $voidTransactionMethod = 'POST';
    protected $completePreAuthMethod = 'POST';
    protected $paymentMethod = 'GET';

    public function __construct($version = 'v1')
    {
        $this->paymentUrl = self::BASE_URL . $version . '/payments';
        $this->reportUrl = self::BASE_URL . $version . '/reports';
        $this->profileUrl = self::BASE_URL . $version . '/profiles';
        $this->tokenizationUrl = self::BASE_URL . $version . '/scripts/tokenization/tokens';
    }

    public function getMakePaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function getReturnPaymentUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/returns';
    }

    public function getVoidTransactionUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/void';
    }

    public function getCompletePreAuthUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/completions';
    }

    public function getPaymentUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId;
    }

    public function getMakePaymentMethod()
    {
        return $this->makePaymentMethod;
    }

    public function getReturnPaymentMethod()
    {
        return $this->returnPaymentMethod;
    }

    public function getVoidTransactionMethod()
    {
        return $this->voidTransactionMethod;
    }

    public function getCompletePreAuthMethod()
    {
        return $this->completePreAuthMethod;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
}

