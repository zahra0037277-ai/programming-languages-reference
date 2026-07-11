<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);
    $codemeli = trim($_POST['codemeli']);
    $password = trim($_POST['password']);

    $sql = "INSERT INTO users (fullname, phone, codemeli, password)
            VALUES ('$fullname', '$phone', '$codemeli', '$password')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
        alert('ثبت نام با موفقیت انجام شد');
        window.location.href='login.html';
        </script>";

        exit();

    } else {

        echo "خطا: " . $conn->error;

    }
}
?>