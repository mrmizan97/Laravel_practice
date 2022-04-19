<?php
namespace App\PaymentService;

class BkashService
{
    private $transaction_id;
    public function __construct($transaction_id)
    {
        $this->transaction_id=$transaction_id;
    }
    public function pay()
    {
        return [
            'amount'=>100,
            'transaction'=>$this->transaction_id,
        ];
    }
}
