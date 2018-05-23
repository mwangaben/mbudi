<?php

use PHPUnit\Framework\TestCase;
use Mbudi\Accounts\BankAccount;

/**
 *
 *
 * @group group
 */
class BankAccountTest extends TestCase
{
    protected $account;

    public function setUp()
    {
        $this->account = new BankAccount;
    }

    /** @test **/
    public function it_check_if_the_balance_starts_with_zero()
    {
        $this->assertEquals(0, $this->account->getBalance());
    }
}
