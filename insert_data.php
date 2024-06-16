<?php
$servername = "localhost";
$username = "forecaster";
$password = "Shuichi261";
$dbname = "cuaca";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari request POST
$suhu = $_POST['suhu'];
$kelembaban = $_POST['kelembaban'];
$tekanan = $_POST['tekanan'];
$curahHujan = $_POST['curahHujan'];
$radiasiMatahari = $_POST['radiasiMatahari'];
$kecepatanAngin = $_POST['kecepatanAngin'];
$arahAngin = $_POST['arahAngin'];

// Mengambil waktu saat ini sebagai timestamp
$timestamp = date('Y-m-d H:i:s');

// Prepare statement untuk menyimpan data ke dalam database
$stmt = $conn->prepare("INSERT INTO tabel_cuaca (suhu, kelembaban, tekanan, curah_hujan, radiasi_matahari, kecepatan_angin, arah_angin, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $suhu, $kelembaban, $tekanan, $curahHujan, $radiasiMatahari, $kecepatanAngin, $arahAngin, $timestamp);

// Eksekusi statement
if ($stmt->execute()) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $stmt->error;
}

// Menutup koneksi dan statement
$stmt->close();
$conn->close();
?>