<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

$lingkaran = new Lingkaran(5);

$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

echo "Luas lingkaran dengan jari-jari $lingkaran->jari_jari cm adalah: " . $luas_lingkaran . " cm^2\n";
echo "Keliling lingkaran dengan jari-jari $lingkaran->jari_jari cm adalah: " . $keliling_lingkaran . " cm\n";

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

$bola = new Bola(3);

$volume_bola = $bola->volume();

echo "Volume bola dengan jari-jari $bola->jari_jari cm adalah: " . $volume_bola . " cm^3\n";

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$tabung = new Tabung(4, 10);

$volume_tabung = $tabung->volume();

echo "Volume tabung dengan jari-jari $tabung->jari_jari cm dan tinggi $tabung->tinggi cm adalah: " . $volume_tabung . " cm^3\n";

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$kerucut = new Kerucut(4, 10);

$volume_kerucut = $kerucut->volume();

echo "Volume kerucut dengan jari-jari $kerucut->jari_jari cm dan tinggi $kerucut->tinggi cm adalah: " . $volume_kerucut . " cm^3\n";

?>