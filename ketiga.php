<?php

class Lingkaran
{
    const PHI = 3.14

    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
        return self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2*self::PHI*$jari_jari;
        return 2 * self::PHI * $jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
        return (4/3) * self::PHI * pow($jari_jari, 3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;

    public function volume($jari_jari, $tinggi) : float {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;

    public function volume($jari_jari, $tinggi) : float {
        return (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$lingkaran = new Lingkaran();
$jari_jari_lingkaran = 5;

$luas_lingkaran = $lingkaran->luas($jari_jari_lingkaran);
$keliling_lingkaran = $lingkaran->keliling($jari_jari_lingkaran);

echo "Luas lingkaran dengan jari-jari $jari_jari_lingkaran cm adalah: " . $luas_lingkaran . " cm^2\n";
echo "Keliling lingkaran dengan jari-jari $jari_jari_lingkaran cm adalah: " . $keliling_lingkaran . " cm\n";

$bola = new Bola();
$jari_jari_bola = 3;

$volume_bola = $bola->volume($jari_jari_bola);

echo "Volume bola dengan jari-jari $jari_jari_bola cm adalah: " . $volume_bola . " cm^3\n";

$tabung = new Tabung();
$jari_jari_tabung = 4;
$tinggi_tabung = 10;

$volume_tabung = $tabung->volume($jari_jari_tabung, $tinggi_tabung);

echo "Volume tabung dengan jari-jari $jari_jari_tabung cm dan tinggi $tinggi_tabung cm adalah: " . $volume_tabung . " cm^3\n";

$kerucut = new Kerucut();
$jari_jari_kerucut = 4;
$tinggi_kerucut = 10;

$volume_nasi_tumpeng = $nasi_tumpeng->volume(4, 10);
$volume_kerucut = $kerucut->volume($jari_jari_kerucut, $tinggi_kerucut);

echo "Volume nasi tumpeng adalahh: " . $volume_nasi_tumpeng . "cm^3";
echo "Volume kerucut dengan jari-jari $jari_jari_kerucut cm dan tinggi $tinggi_kerucut cm adalah: " . $volume_kerucut . " cm^3\n";

?>