<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="tanggal_lahir">tanggal lahir : </label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        <br>
        <button type="sumbit" name="submit" > Hitung Umur</button>
    </form>
    <?php
      if(isset($_POST['submit'])){
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $umur = hitungumur($tanggal_lahir);
        echo "umur anda adalah $umur tahun.";
    }

    function hitungumur($tanggal_lahir){
        $tanggal = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $interval = $sekarang->diff($tanggal);
        return $interval->y;
    }
    ?>
</body>
</html>