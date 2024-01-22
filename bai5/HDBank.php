<?php

require_once "./BankAbstract.php";

class HDBank extends BankAbstract
{
    public function napTien($sotien)
    {
        $this->soDu += $sotien;
    }
}
