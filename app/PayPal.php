<?php
namespace App;

class Paypal
{
    private $_apiContext;
    Private $shopping_cart;
    private $_ClientId = 'Ab5o7T9BFhv9G5Rwwmkw_xQQc8A_dVqxhEF-Ez5C6_z3nzNdHn2O9ReKu_exNKW7KhnOwIK-ZtNxpUGv';
    private $_ClientSecret = 'EBHvgeN33lUiSXjbhdOLouSCUy2eDSaSp0ZqqrPO_RUreSIRsXgIc2Lze7ny3yQOBbA3n4RFVmZI5Kf5';

    public function __construct($shopping_cart){
      $this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret);

      $config = config("paypal_payment");
      $flatConfig= array_dot($config);
      $this->_apiContext->SetConfig($flatConfig);
      $this->shopping_cart=$shopping_cart;
    }

    public function generate(){
        $payment = \PaypalPayment::payment()->setIntent("sale")
                            ->setPayer($this->payer())
                            ->setTransactions([$this->transaction()])
                            ->setRedirectUrls($this->redirectURLs());

        try{
            $payment->create($this->_apiContext);
        } catch(\Exception $ex){
            dd($ex);
            exit(1);
        }

        return $payment;

    }


    public function payer(){
return \PaypalPayment::payer()
                  ->setPaymentMethod("paypal");
    }
    public function transaction(){
        return \PaypalPayment::transaction()
        ->setAmount($this->amount())
        ->setItemList($this->items())
        ->setDescription("Tu compra en productos facilito")
        ->setInvoiceNumber(uniqid());
    }
    public function items(){
      $items = [];
      $products = $this->shopping_cart->products()->get();
      foreach ($products as $product) {
      array_push($items,$product->paypalItem());
      }
      return \PaypalPayment::itemList()->setItems($items);

    }

    public function amount(){
            return \PaypalPayment::amount()->setCurrency("USD")
                      ->setTotal($this->shopping_cart->totalUSD());
    }
    public function redirectURLs(){
      $baseURL = url('/');
      return \PaypalPayment::redirectUrls()
      ->setReturnUrl("$baseURL/payments/store")
      ->setCancelUrl("$baseURL/carrito");
    }

    public function execute($paymentId,$payerId){
      $payment =\PaypalPayment::getById($paymentId,$this->_apiContext);
      $execution=\PaypalPayment::PaymentExecution()->setPayerId($payerId);
      $payment->execute($execution,$this->_apiContext);
      return $payment->execute($execution,$this->_apiContext);
    }
}
