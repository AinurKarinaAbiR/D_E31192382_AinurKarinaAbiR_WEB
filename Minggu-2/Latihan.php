<?php
class laptop{
      public $pemilik, $merk;
    
    function hidupkan_laptop(){
        $tampil = "Hidupkan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    }
    function matikan_laptop(){
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    } 
    function restart_laptop(){
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik.". Hidupkan laptop ".$this->merk." milik ".$this->pemilik."<br/>
        ";
        return $tampil;
    }
    function __construct($x,$y){
        $this->pemilik = $x;
        $this->merk = $y;
    }
}

$asus = new laptop("A", "ASUS");
echo $asus->hidupkan_laptop()."<br/>";

$acer = new laptop("A", "ACER");
echo $acer->matikan_laptop()."<br/>";

$lenovo = new laptop("L", "Lenovo");
echo $lenovo->restart_laptop()."<br/>";
?>