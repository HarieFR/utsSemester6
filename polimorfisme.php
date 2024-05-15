<?php

// Kelas induk Binatang
class Binatang {
    // Metode bersuara
    public function bersuara() {
        // Metode ini akan diimplementasikan ulang di kelas turunan
    }
}

// Kelas turunan Kucing dari Binatang
class Kucing extends Binatang {
    // Implementasi metode bersuara untuk Kucing
    public function bersuara() {
        echo "Meong!";
    }
}

// Kelas turunan Anjing dari Binatang
class Anjing extends Binatang {
    // Implementasi metode bersuara untuk Anjing
    public function bersuara() {
        echo "Guk guk!";
    }
}

// Kelas turunan Tikus dari Binatang
class Tikus extends Binatang {
    // Implementasi metode bersuara untuk Tikus
    public function bersuara() {
        echo "Cicit cicit!";
    }
}

// Fungsi untuk menguji polimorfisme
function ujiPolimorfisme($binatangs) {
    foreach ($binatangs as $binatang) {
        // Memanggil metode bersuara dari setiap objek
        $binatang->bersuara();
        echo "<br>";
    }
}

// Membuat array objek binatang
$binatangs = [new Kucing(), new Anjing(), new Tikus()];

// Memanggil fungsi untuk menguji polimorfisme
ujiPolimorfisme($binatangs);

?>
