<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopie";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login berhasil!";
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}

$conn->close();

?>
