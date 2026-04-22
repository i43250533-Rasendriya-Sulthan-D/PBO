<?php

class Kendaraan {

    final public function mesin() {
        echo "Mesin standar";
    }

}

class Mobil extends Kendaraan {

    // Baris di bawah ini akan menyebabkan ERROR (Fatal error) jika dijalankan
    // karena mencoba melakukan override pada method yang bersifat final.
    public function mesin() {
        echo "Mesin mobil";
    }

}

?>