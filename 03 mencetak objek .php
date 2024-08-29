<?php
class Buah {
  public $nama;
  public $warna;

  public function __construct($nama, $warna)
  {
    $this->nama = $nama;
    $this->warna = $warna;
  }
}
echo '<pre>';

$Pepaya = new Buah("Pepaya", "Orange");
$Nanas = new Buah("Nanas", "Kuning");
print_r($Pepaya);
print"<p>";
print_r($Nanas);
echo '</pre>';

print_r("<p><strong><i>By Meylisa eka putry</strong>");
