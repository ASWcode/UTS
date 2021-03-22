<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Ayu Sri Wahyuni</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="">Nama Wilayah</label></td>
        <td>
          <select name="wilayah" id="">
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Jawa Barat">JAWA BARAT</option>
            <option value="Banten">BANTEN</option>
            <option value="Jawa Tengah">JAWA TENGAH</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="">Jumlah Positif</label></td>
        <td>
          <input type="text" name="positif">
        </td>
      </tr>
      <tr>
        <td><label for="">Jumlah Dirawat</label></td>
        <td><input type="text" name="dirawat"></td>
      </tr>
      <tr>
        <td><label for="">Jumlah Sembuh</label></td>
        <td><input type="text" name="sembuh"></td>
      </tr>
      <tr>
        <td><label for="">Jumlah Meninggal</label></td>
        <td><input type="text" name="meninggal"></td>
      </tr>
      <tr>
        <td><label for="">Nama Operator</label></td>
        <td><input type="text" name="namaoperator"></td>
      </tr>
      <tr>
        <td><label for="">NIM Mahasiswa</label></td>
        <td><input type="text" name="nimmahasiswa"></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" name="submit">Kirim</button>
        </td>
      </tr>
    </table>
      
  </form>

  <?php 
    if(isset($_POST["submit"])){
      $wilayah = $_POST["wilayah"];
      $positif = $_POST["positif"];
      $dirawat = $_POST["dirawat"];
      $sembuh = $_POST["sembuh"];
      $meninggal = $_POST["meninggal"];
      $namaoperator = $_POST["namaoperator"];
      $nimmahasiswa = $_POST["nimmahasiswa"];

      $tanggal = date("d M Y H:i:s");
      echo "
      <center>
      <p>Data Pemantauan Covid19 Wilayah $wilayah</p>
      <p>Per $tanggal</p>
      <p>$namaoperator/$nimmahasiswa</p>
      <table border>
        <tr>
          <td>Positif</td>
          <td>Dirawat</td>
          <td>Sembuh</td>
          <td>Meninggal</td>
        </tr>
        <tr>
          <td>$positif</td>
          <td>$dirawat</td>
          <td>$sembuh</td>
          <td>$meninggal</td>
        </tr>
      </table>
      </center>
      ";
    }
  ?>



</body>
</html>