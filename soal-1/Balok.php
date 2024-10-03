<?php
class Balok
{
    private $panjang;
    private $lebar;
    private $tinggi;
    // deklarasikan atribut-atribut kelas Balok

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang,$lebar,$tinggi) {
        $this->panjang = $panjang;
        $this->lebar   =$lebar;
        $this->tinggi  =$tinggi;
    }

    // definisikan metode menghitung volume, luas permukaan, 
    public function luasp(){
        $panjang=$this->panjang;
        $lebar=$this->lebar;
        $tinggi=$this->tinggi;
        $hatiluas=2*($panjang * $lebar) + ($panjang*$lebar) + ($lebar*$tinggi);
        return $hatiluas;

    }
    public function suara(){
        $panjang=$this->panjang;
        $lebar=$this->lebar;
        $tinggi=$this->tinggi;
        $toupiq=4*($panjang+$lebar+$tinggi);
        return $toupiq;
    }
    
}


$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

echo "Balok 1 "."<br> volume=".$balok_1->suara()."<br> luas=".$balok_1->luasp()."<br> <br>";
echo "Balok 2 "."<br> volume=".$balok_2->suara()."<br> luas=".$balok_2->luasp();

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372
