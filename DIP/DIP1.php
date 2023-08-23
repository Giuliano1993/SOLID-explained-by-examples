<?php

class StripeProvider{
    
}

// High level module like controller should not depend directly upon on a low level like
// StripeProvider. What if we want to implement PayPal? Or if we change the way we process the payment?
// Following the OCP we need instead to create an  interface to work this out
class CheckoutController{


    public $paymentProvider;

    public function __construct(StripeProvider $stripeProvider)
    {
        $this->paymentProvider = $stripeProvider;
    }
}