<?php

require('../DBConnection/connection.php');

$qry = "SELECT * FROM users";
$result = $conn->query($qry);

/*$stmt = $pdo->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();*/

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $usrnm = $row['username_user'];
        $pswrd = $row['password_user'];
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == $usrnm && $password == $pswrd) {
                header("Location: ../Users/Main.php");
                exit();
            } else {
                echo "Invalid username or password.";
            }
        }
    }
}

/*
if ($stmt->rowCount() > 0) {
    // Pengguna sudah terdaftar, lakukan tindakan yang sesuai

    echo "Pengguna dengan email tersebut sudah terdaftar.";
} else {
    // Pengguna belum terdaftar, tambahkan data pengguna ke database
    $insertQuery = "INSERT INTO users (nama, email) VALUES (:nama, :email)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':nama', $nama);
    $insertStmt->bindParam(':email', $email);
    $insertStmt->execute();

    echo "Data pengguna berhasil ditambahkan ke database.";
}*/
