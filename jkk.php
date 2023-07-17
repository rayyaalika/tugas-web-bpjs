<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Jaminan Hari Tua</title>
</head>
<style>
    input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=number], select{
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]{
    background-color: #45a049;
    width: 100px;
    }

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }
    
    input[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=button]{
    background-color: #45a049;
    width: 100px;
    }    
</style>
<body>
<?php
    $nama = $perusahaan = "";
    $gaji = $usia = 0;
    
    ?>
    <center>
        <h3>MENGHITUNG JAMINAN KECELAKAAN KERJA</h3>
   

    <div>
        <form action="jkk.php" method="post">
        <label>Nama</label>
        <br>
        <input type="text" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $nama;?>" required>
        <br>
        <label>Gaji</label>
        <br>
        <input type="number" name="gaji" placeholder="Masukkan Gaji Anda" value="<?php echo $gaji;?>" required>
        <br>
        <label>Usia</label>
        <br>
        <input type="number" name="usia" placeholder="Masukkan Usia Anda" value="<?php echo $usia;?>" required>
        <br>
        <label>Perusahaan</label>
        <br>
        <input type="text" name="perusahaan" placeholder="Masukkan Nama Perusahaan Anda" value="<?php echo $perusahaan;?>" required>
        <br>
        <input type="submit" name="submit" value="Submit">
        <input onclick="location.href='index.php'" type="button" value="Kembali">
        </form>

        <h4>Hasil</h4>
        <br>
        <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $gaji = $_POST['gaji'];
            $usia = $_POST['usia'];
            $perusahaan = $_POST['perusahaan'];

            $iuran_sangatrendah = (0.24/100)*$gaji;
            $iuran_rendah = (0.54/100)*$gaji;
            $iuran_sedang = (0.89/100)*$gaji;
            $iuran_tinggi = (1.27/100)*$gaji;
            $iuran_sangattinggi = (1.74/100)*$gaji;

            echo $nama." bekerja dengan risiko kecelakaan kerja sangat rendah";
            echo "<br>";
            echo "Iuran JKK yang dibayar ".$perusahaan." = Rp.".$iuran_sangatrendah." per bulan";
            echo "<br>";
            echo "<br>";

            echo $nama." bekerja dengan risiko kecelakaan kerja rendah";
            echo "<br>";
            echo "Iuran JKK yang dibayar ".$perusahaan." = Rp.".$iuran_rendah." per bulan";
            echo "<br>";
            echo "<br>";

            echo $nama." bekerja dengan risiko kecelakaan kerja sedang";
            echo "<br>";
            echo "Iuran JKK yang dibayar ".$perusahaan." = Rp.".$iuran_sedang." per bulan";
            echo "<br>";
            echo "<br>";

            echo $nama." bekerja dengan risiko kecelakaan kerja tinggi";
            echo "<br>";
            echo "Iuran JKK yang dibayar ".$perusahaan." = Rp.".$iuran_tinggi." per bulan";
            echo "<br>";
            echo "<br>";

            echo $nama." bekerja dengan risiko kecelakaan kerja sangat tinggi";
            echo "<br>";
            echo "Iuran JKK yang dibayar ".$perusahaan." = Rp.".$iuran_sangattinggi." per bulan";
        }
        ?>
    </div>
    </center>
</body>
</html>