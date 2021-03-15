<?php

//Deklarasi kelas
class Buku {

//property
	public $judul;
	public $pengarang;
	public $penerbit;
	public $tahun;
	public $cetakan;
	public $hasSunRoof = true;

//method = hello
	public function hello ()
	{
		return "beep";
	}
}

//membuat instance
$HarryPotter = new Buku ();
$Divergent = new Buku ();

//set values
$HarryPotter -> judul = "Harry Potter";
$Divergent -> judul = "Divergent";
$HarryPotter -> pengarang = "J. K. Rowling.";
$Divergent -> pengarang = "Veronica Roth";
$HarryPotter -> penerbit = "Bloomsbury Publishing ";
$Divergent -> penerbit = "HarperCollins";
$HarryPotter -> tahun = "1997";
$Divergent -> tahun = "2012";
$HarryPotter -> cetakan = "pertama";
$Divergent -> cetakan = "pertama";

//get values
echo $HarryPotter -> judul;
echo "<br/>";
echo $Divergent -> judul;
echo "<br/>";
echo $HarryPotter -> pengarang;
echo "<br/>";
echo $Divergent -> pengarang;
echo "<br/>";
echo $HarryPotter -> penerbit;
echo "<br/>";
echo $Divergent -> penerbit;
echo "<br/>";
echo $HarryPotter -> tahun;
echo "<br/>";
echo $Divergent -> tahun;
echo "<br/>";
echo $HarryPotter -> cetakan;
echo "<br/>";
echo $Divergent -> cetakan;
echo "<hr/>";

//methods get a beep
echo $HarryPotter -> hello(); //beep
echo "<br/>";
echo $Divergent -> hello(); //beep
?>