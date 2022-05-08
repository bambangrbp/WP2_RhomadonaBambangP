<?php
defined('BASEPATH')or exit('No Direct script access allowe');

class Review_model extends CI_Model
{
    public $harga;

    public function proses($data)
    {
        if ($data="Nike") {
            $this->harga=1000;
        } elseif($data="Adidas"){
            $this->harga=2000;
        }elseif($data="Kickers"){
            $this->harga=3000;
        }elseif($data="Eiger"){
            $this->harga=4000;
        }else{
            $this->harga=5000;
        }
        
        return $this->harga;
    }
}