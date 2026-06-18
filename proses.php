<?php

require 'vendor/autoload.php';
require 'koneksi.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(nama,email,password)
        VALUES('$nama','$email','$password')";

if(mysqli_query($conn,$sql))
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'idamadesuarjaya31@gmail.com';
        $mail->Password = 'mxsq uczd zdil apqc';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom(
            'idamadesuarjaya31@gmail.com',
            'Sistem Registrasi'
        );

        $mail->addAddress($email, $nama);

        $mail->isHTML(true);

        $mail->Subject = 'Konfirmasi Registrasi';

        $mail->Body =
        "
        Halo <b>$nama</b>,<br><br>

        Terima kasih telah melakukan registrasi.<br>

        Data anda berhasil tersimpan pada sistem.
        ";

        $mail->send();

        echo "Registrasi berhasil dan email berhasil dikirim.";
    }
    catch (Exception $e)
{
    echo "Registrasi berhasil tetapi email gagal dikirim.<br>";
    echo $mail->ErrorInfo;
}
}
else
{
    echo "Registrasi gagal.";
}
?>