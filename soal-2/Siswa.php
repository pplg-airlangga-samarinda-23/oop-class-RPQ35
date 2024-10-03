<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    private $nama;
    private $NISN;
    private $alamat;
    private $jurusan;
    private $tanggal_lahir;

    
    // definisikan metode konstruktor, setter ,dan getter
    
    public function __construct($nama,$NISN,$alamat,$jurusan,$tanggal_lahir) {
        $this->nama = $nama;
        $this->NISN = $NISN;
        $this->alamat=$alamat;
        $this->tanggal_lahir=$tanggal_lahir;
    }
    
    public function __get($atribrut){
        return $this->$atribrut;
    }

    public function __set($atribrut, $value)
    {$this->$atribrut = $value;}

    // buat metode untuk menghitung umur siswa
    public function hitungUmur() {
        $aaa=$this->tanggal_lahir;
        $datte= new DateTime('now');
        $newDate = DateTime::createFromFormat('d-m-Y', $aaa);
        $umur=$datte->diff($newDate);

        return $umur;
    }

    public function pakecho(){
        echo "nama=".$this->nama."<br>";
        echo "NISN=".$this->NISN ."<br>";
        echo "alamat=".$this->alamat."<br>";
        echo "tgl=".$this->tanggal_lahir."<br>";
        echo $this->hitungUmur()->format(' usia = %y tahun');
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");


                //hiraukan ini
                // $selisih =$siswa_1->hitungUmur()-$siswa_2->hitungUmur();
                    // $selisihan=$selisih->format(' usia = %y tahun');

$siswa_1->pakecho();
echo "<br>===============================================<br><br>dengan bambang lebih tua dari bahrun<br>===============================================<br>";
$siswa_2->pakecho();


// contoh output:
// Bambang lebih tua dibandingkan Bahrun.