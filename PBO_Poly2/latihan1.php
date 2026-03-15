<?php

// Parents Class
class BangunDatar {

    public function hitungLuas(){
        echo "Menghitung luas bangun datar <br>";
    }

}

// Child class: Persegi
class Persegi extends BangunDatar {

    public $sisi = 4;

    public function hitungLuas(){
        $luas = $this->sisi * $this->sisi;
        echo "Luas Persegi = " . $luas . "<br>";
    }

}


// Child class: Lingkaran
class Lingkaran extends BangunDatar {

    public $r = 7;

    public function hitungLuas(){
        $luas = 3.14 * $this->r * $this->r;
        echo "Luas Lingkaran = " . $luas . "<br>";
    }

}


// Child class: Segitiga
class Segitiga extends BangunDatar {

    public $alas = 6;
    public $tinggi = 4;

    public function hitungLuas(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas Segitiga = " . $luas . "<br>";
    }

}


// Object
$persegi = new Persegi();
$lingkaran = new Lingkaran();
$segitiga = new Segitiga();

$persegi->hitungLuas();
$lingkaran->hitungLuas();
$segitiga->hitungLuas();

?>