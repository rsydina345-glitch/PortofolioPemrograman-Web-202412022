<?php
$nama = "";
$email = "";
$pesan = "";
$error = "";
$sukses = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars(trim($_POST["nama"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pesan = htmlspecialchars(trim($_POST["pesan"]));

    if (empty($nama) || empty($email) || empty($pesan)) {
        $error = "Semua kolom wajib diisi!";
    } else {
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku Tamu Digital STITEK Bontang</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:40px;
}

.container{
    width:600px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.15);
}

h1{
    text-align:center;
    color:#0d6efd;
}

label{
    display:block;
    margin-top:15px;
    font-weight:bold;
}

input[type=text],
input[type=email],
textarea{
    width:100%;
    padding:10px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:5px;
    box-sizing:border-box;
}

textarea{
    height:120px;
    resize:vertical;
}

button{
    margin-top:20px;
    width:100%;
    padding:12px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#0b5ed7;
}

.error{
    margin-top:20px;
    padding:15px;
    background:#f8d7da;
    color:#842029;
    border-radius:5px;
}

.hasil{
    margin-top:25px;
    padding:20px;
    background:#d1e7dd;
    color:#0f5132;
    border-radius:5px;
}

.hasil h3{
    margin-top:0;
}

</style>

</head>
<body>

<div class="container">

<h1>Buku Tamu Digital STITEK Bontang</h1>

<form method="POST" action="">

<label>Nama Lengkap</label>
<input type="text" name="nama" value="<?php echo $nama; ?>">

<label>Alamat Email</label>
<input type="email" name="email" value="<?php echo $email; ?>">

<label>Pesan / Komentar</label>
<textarea name="pesan"><?php echo $pesan; ?></textarea>

<button type="submit">Kirim Pesan</button>

</form>

<?php if($error!=""){ ?>

<div class="error">
<strong>Terjadi Kesalahan!</strong><br>
<?php echo $error; ?>
</div>

<?php } ?>

<?php if($sukses){ ?>

<div class="hasil">

<h3>Pesan Berhasil Dikirim!</h3>

<p><strong>Nama Lengkap :</strong> <?php echo $nama; ?></p>

<p><strong>Alamat Email :</strong> <?php echo $email; ?></p>

<p><strong>Pesan / Komentar :</strong></p>

<p><?php echo nl2br($pesan); ?></p>

</div>

<?php } ?>

</div>

</body>
</html>