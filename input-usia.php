<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Kategori Usia</title>
</head>

<body>
    <h1>Menentukan Kategori Usia</h1>
    <form method="post">
        <label for="usia">Masukkan Usia:</label>
        <input type="number" id="usia" name="usia" required>
        <input type="submit" value="Tentukan Kategori">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil usia dari input
        $usia = isset($_POST['usia']) ? (int)$_POST['usia'] : 0;

        // Tentukan kategori usia
        if ($usia >= 0 && $usia <= 12) {
            $kategori = "Anak-anak";
        } elseif ($usia >= 13 && $usia <= 17) {
            $kategori = "Remaja";
        } elseif ($usia >= 18 && $usia <= 59) {
            $kategori = "Dewasa";
        } elseif ($usia >= 60) {
            $kategori = "Lansia";
        } else {
            $kategori = "Usia tidak valid";
        }

        // Tampilkan hasil
        echo "<p> Kategori usia: $kategori.</p>";
    }
    ?>
</body>

</html>