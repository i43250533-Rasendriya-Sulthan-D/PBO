<?php

class Matematika {
    
    public static function tambah($a, $b) {
        return $a + $b;
    }
    
}

// Memanggil static method secara langsung dari Class
echo "Hasil penjumlahan math: " . Matematika::tambah(5, 3);

?>