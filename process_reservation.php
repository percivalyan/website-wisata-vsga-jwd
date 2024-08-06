<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$paket = $_POST['paket'];

// Prepare and execute SQL query
$sql = "INSERT INTO reservasi (nama, email, tanggal, jumlah, paket)
VALUES ('$nama', '$email', '$tanggal', '$jumlah', '$paket')";

if ($conn->query($sql) === TRUE) {
  echo "Reservasi berhasil!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
