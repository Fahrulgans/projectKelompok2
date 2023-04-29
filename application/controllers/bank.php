<?php
class Bank extends CI_Model{
    
    public $pilih_bank, $virtual_account;

    public function getVA($pilih_bank=null){

        $this->bank=$pilih_bank;
        if($this->bank == "BCA")
            {$this->virtual_account=8803301234567890;}
        elseif($this->bank == "BRI")
        {$this->virtual_account=55022901234567890;}
        elseif($this->bank == "MANDIRI")
        {$this->virtual_account=7705501234567890;}

    return $this->virtual_account;

    }
}
