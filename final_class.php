<?php

final class Database {

    public function connect() {
        echo "Koneksi database";
    }

}

// Baris di bawah ini akan menyebabkan ERROR (Fatal error) jika dijalankan
// karena class Database bersifat final dan tidak bisa di-extend.
class MyDB extends Database {

}

?>