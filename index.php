<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Mahasiswa</title>
</head>
<body>

<h2>Form Registrasi</h2>

<form action="proses.php" method="POST">

    <label>Nama</label><br>
    <input type="text" name="nama" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">Daftar</button>

</form>

</body>
</html>