<?php

namespace Mbudi\Accounts;

class BankAccount
{
    protected $balance = 0;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($cash)
    {
        $this->balance = $this->balance + $cash;

        return $this->balance;
    }

    public function withdraw($cash)
    {
        $this->balance = $this->balance - $cash;

        return $this->balance;
    }
}
