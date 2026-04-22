<?php

class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }
    public static function bagi($a, $b) {
        if ($b == 0) return "Error: Pembagi nol";
        return $a / $b;
    }
    public static function tambah($a, $b) {
        return $a + $b;
    }
    public static function kurang($a, $b) {
        return $a - $b;
    }
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";
if (isset($_POST['hitung'])) {
    $angka1 = $_POST['a'];
    $angka2 = $_POST['b'];
    $operasi = $_POST['operasi'];

    switch ($operasi) {
        case 'tambah': $hasil = Matematika::tambah($angka1, $angka2); break;
        case 'kurang': $hasil = Matematika::kurang($angka1, $angka2); break;
        case 'kali':   $hasil = Matematika::kali($angka1, $angka2); break;
        case 'bagi':   $hasil = Matematika::bagi($angka1, $angka2); break;
        case 'luas':   $hasil = Matematika::luasPersegi($angka1); break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Matematika Static</title>
</head>
<body>
    <h2>Tugas Praktikum 2: Static Method</h2>
    
    <form method="post">
        <input type="number" name="a" placeholder="Angka 1 / Sisi" required>
        <input type="number" name="b" placeholder="Angka 2 (opsional)">
        
        <select name="operasi">
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (x)</option>
            <option value="bagi">Bagi (/)</option>
            <option value="luas">Luas Persegi (Gunakan Angka 1)</option>
        </select>
        
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <h3>Hasil: <?php echo $hasil; ?></h3>
    <?php endif; ?>

</body>
</html>