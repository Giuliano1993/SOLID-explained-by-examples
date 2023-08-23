<?php

interface PaymentProviderInterface
{

}

class StripeProvider implements PaymentProviderInterface
{

}

class CheckoutController
{
    public $paymentProvider;

    public function __construct(PaymentProviderInterface $paymentProvider)
    {
        $this->paymentProvider = $paymentProvider;
    }


}