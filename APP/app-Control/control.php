<?php
class control{
public $item;
public $harga;
public $nama;
public $sell;

public function __construct($nama =null,$item =null,$harga=null,$sell=null)
{
    $this->nama=$nama;
    $this->item=$item;
    $this->harga=$harga;
    $this->sell=$sell;
}

public function cetak(){
     "Item name: {$this->nama}<br>stock ready: {$this->item},<br>Price: {$this->harga} USD<br>Sold: {$this->sell}";
}
}
$item1=new control("Pioneer Stereo 1980",8,650,16);
$item1->cetak();
$item2=new control("VLP-700 Disc Player",17,220,57);
$item2->cetak();
?>