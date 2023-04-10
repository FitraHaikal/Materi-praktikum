<?php
//class mobil
Class Mobil {
    public $nama;
    public $merk;

    function getInfo(){
        echo "Nama Mobil: ".$this->nama."</br>";
        echo "Merk: ".$this->merk."</br>";

    }
}

//bagian main

$ferari=new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";

$ferari->getInfo();

?>