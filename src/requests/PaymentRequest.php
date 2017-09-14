<?php
namespace enumit\Bambora\requests;

class PaymentRequest extends Request
{
    public function makePayment($paymentRequest)
    {
        return $this->setUrl($this->endpoint->getMakePaymentUrl())
            ->setMethod($this->endpoint->getMakePaymentMethod())
            ->setRequestData($paymentRequest)
            ->sendData();
    }

    public function returnPayment($transId, $returnRequest)
    {
        return $this->setUrl($this->endpoint->getReturnPaymentUrl($transId))
            ->setMethod($this->endpoint->getReturnPaymentMethod())
            ->setRequestData($returnRequest)
            ->sendData();
    }

    public function voidPayment($transId, $voidRequest)
    {
        return $this->setUrl($this->endpoint->getVoidTransactionUrl($transId))
            ->setMethod($this->endpoint->getVoidTransactionMethod())
            ->setRequestData($voidRequest)
            ->sendData();
    }

    public function completePreAuth($transId, $paymentRequest)
    {
        return $this->setUrl($this->endpoint->getCompletePreAuthUrl($transId))
            ->setMethod($this->endpoint->getCompletePreAuthMethod())
            ->setRequestData($paymentRequest)
            ->sendData();
    }

    public function getPayment($transId)
    {
        return $this->setUrl($this->endpoint->getPaymentUrl($transId))
            ->setMethod($this->endpoint->getPaymentMethod())
            ->sendData();
    }
}
