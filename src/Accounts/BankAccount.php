<?php

namespace Mbudi\Accounts;

class BankAccount
{
    protected $balance = 0;

    public function getBalance()
    {
        return $this->balance;
    }
}
