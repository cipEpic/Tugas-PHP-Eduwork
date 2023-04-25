<!DOCTYPE html>
<html>
<head>
	<title>Hitung BMI</title>
</head>
<body>
	<h2>Hitung BMI</h2>
	<form method="post">
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
		<label>Tinggi (cm):</label>
		<input type="number" name="tinggi"><br><br>
		<label>Berat (kg):</label>
		<input type="number" name="berat"><br><br>
		<input type="submit" value="Hitung">
	</form>

	<?php
	if ($_POST) {
		//mengambil nilai dari form
		$nama = $_POST['nama'];
		$tinggi = $_POST['tinggi'];
		$berat = $_POST['berat'];

		//menghitung BMI
		$bmi = $berat / (($tinggi/100) * ($tinggi/100));

		//menampilkan hasil
		echo "Halo, " . $nama . ". Nilai BMI anda adalah " . number_format($bmi,2) . ", anda termasuk ";

		if ($bmi < 18.5) {
		    echo "kurus.";
		} elseif ($bmi >= 18.5 && $bmi < 25) {
		    echo "normal.";
		} else{
		    echo "gemuk.";
		}
	}
	?>
</body>
</html>
