<?php

namespace magic_methods01;

class BankAccount
{
    private $accountNumber;

    private $balance;

    public function __construct(
        $accountNumber,
        $balance
    ) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function __toString()
    {
        return "Bank Account: $this->accountNumber. Balance: $$this->balance";
    }
}