<!DOCTYPE html>
<html>
<head>
    <title>Kategori Nilai</title>
</head>
<body>
    <form method="post">
        <label>Input nilai:</label>
        <input type="number" name="nilai" required>
        <button type="submit">Hitung</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ambil nilai dari form
        $nilai = $_POST["nilai"];

        // hitung kategori
        switch(true) {
            case ($nilai >= 90 && $nilai <= 100):
                $kategori = "A";
                break;
            case ($nilai >= 80 && $nilai < 90):
                $kategori = "B";
                break;
            case ($nilai >= 70 && $nilai < 80):
                $kategori = "C";
                break;
            default:
                $kategori = "D";
        }

        // tampilkan hasil
        echo "Nilai Anda adalah " . $nilai . ", kategori nilai Anda adalah " . $kategori;
    }
    ?>
</body>
</html>
