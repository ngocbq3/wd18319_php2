<?php

namespace App;

class HKBank implements BankInterface
{
    public $hoten;
    public $stk;
    public $soDu;
    public function __construct($hoten, $stk, $soDu)
    {
        $this->hoten = $hoten;
        $this->stk = $stk;
        $this->soDu = $soDu;
    }

    public function napTien($sotien)
    {
        $this->soDu += $sotien;
    }
    public function rutTien($sotien)
    {
        $this->soDu -= $sotien;
    }
    public function chuyenTien($sotien, $nguoiNhan)
    {
        if ($sotien < $this->soDu) {
            $this->soDu -= $sotien;
            $nguoiNhan->soDu += $sotien;
            echo "<br />Bạn vừa thực hiện chuyển tiền thành công số tiền Là $sotien";
            echo "<br />Sang tài khoản $nguoiNhan->stk";
            echo "<br />Số dư tài khoản là: $this->soDu";
        } else {
            echo "<br />Số tiền không đủ để thực hiện lệnh chuyển tiền";
        }
    }
}
