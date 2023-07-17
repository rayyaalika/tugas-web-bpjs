<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<style>
    body {
    width: 100%;
    min-height: 100vh;
    background: #FEEDB5;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
    .btn-group .button {
    background-color: #4CAF50;
    border: 1px solid green;
    border-radius: 10px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    width: 300px;
    display: block;
    }

    .btn-group .button:not(:last-child) {
    border-bottom: none;  
    }

    .btn-group .button:hover {
    background-color: #3e8e41; 
    }
</style>
<body>
    <center>
    <img src="bpjs.png" width="500px">
    <div class="btn-group">
        <button class="button" onclick="location.href='jht.php'">Jaminan Hari Tua</button>
        <br>
        <button class="button" onclick="location.href='jkk.php'">Jaminan Kecelakaan Kerja</button>
        <br>
        <button class="button" onclick="location.href='jkm.php'">Jaminan Kematian</button>
        <br>
        <button class="button" onclick="location.href='jp.php'">Jaminan Pensiun</button>
    </div>
    </center>
</body>
</html>