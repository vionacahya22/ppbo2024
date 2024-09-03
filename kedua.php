<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";

function kelilingLingkaran($jari) : float {
    $keliling = 2*3.14*$jari;
    return $keliling;
}

$keliling_lingkaran = kelilingLingkaran(45);
echo "keliling lingkaran adalah {$keliling_lingkaran}\n";
function volumeBola($jari) : float {
    $volumee = 4/3*3.14*$jari*$jari*$jari;
    return $volumee;
}
$volume_bola = volumeBola(45);
echo "volume bola adalah {$volume_bola}\n";
function volumeTabung($jari,$tinggi) : float {
    $volumeee = 3.14*$jari*$jari*$tinggi;
    return $volumeee;
}
$volume_tabung = volumeTabung(45,14);
echo "volume tabung adalah {$volume_tabung}\n";
function volumeKerucut($jari,$tinggi) : float {
    $volumeeee = 1/3*3.14*$jari*$jari*$tinggi;
    return $volumeeee;
}
$volume_kerucut = volumeKerucut(45,14);
echo "volume kerucut adalah {$volume_kerucut}\n";
?>