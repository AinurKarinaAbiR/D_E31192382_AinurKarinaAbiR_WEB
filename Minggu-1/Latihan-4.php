<?php
// Buat Class
class Sepatu {
	//properties
	public $jenisHp;
	public $RAM;
	public $merk;
	public $Kualitas;
	public $harga;

	public function statusHarga()
	{
		if ($this->harga > 20000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}

	public function jumlahRAM()
	{
		if ($this->jumlahPakaian > 256) $jumlah = 'Banyak';
		else $jumlah = 'Sedikit';
		return $jumlah;
	}
	
	public function Merk()
	{
		if ($this->merk = 'Iphone') $merk = 'Terkenal';
		else $merk = 'Kurang erkenal';
		return $merk;
		
	}
}
?>