<?php
//encapsulation adalah menyembunyikan detail internal dari sebuah objek dan hanya--
//membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal--
//tetap aman dari perubahan tak terduga.

//membuat class bankaccount
class BankAccount {
private $balance;

//constructor
public function __construct($balance) {
$this->balance = $balance;
}

//metode deposit
public function deposit($amount) {
    if ($amount > 0) {
    $this->balance += $amount;
    }
    }
//metode withdraw
public function withdraw($amount) {
    if ($amount > 0 && $amount <= $this->balance) {
    $this->balance -= $amount;
    }
    }
//metode getBalance
    public function getBalance() {
    return $this->balance;
    }
    }

    //instasiasi encapsulation
    $account = new BankAccount(1000);
    $account->deposit(500);
    $account->withdraw(200);
    echo "Current Balance: " . $account->getBalance(); // Output: Current Balance:
    1300
    ?>