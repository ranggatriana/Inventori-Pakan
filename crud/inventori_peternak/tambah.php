<!DOCTYPE html>
<html>

<head>
  <style>
  a{
    text-decoration: none;
  }
    textarea{
      resize: none;
    }

    body{
      background-color: #99FF99;
      font-family: "Arial";
    }

    h2{
      text-align: center;
    }
  </style>
<title>Inventori</title>
</head>

<body>
 
  <h2>Inventori pakan</h2>
  <a href = "index.php">Beranda</a> / <a href="tambah.php">Tambah Pakan</a>
  <h3>Tambah Pakan</h3>
  
  <form action = "tambah-proses.php" method = "post">
    <table cellpadding="3" cellspacing="0">
      
      <tr>
        <td></td>
        <td>:</td>
        <td><input type="text" name="nis"required autocomplete="off"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"required autocomplete="off"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" required></textarea></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="ttl"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tgl"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="jkel" value="Laki-Laki">Laki-Laki
          <input type="radio" name="jkel" value="Perempuan">Perempuan
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
          <select name="agama"required>
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Membaca">Membaca
          <input type="checkbox" name="hobi[]" value="Menulis">Menulis
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit"name="tambah"value="Tambah"></td>
      </tr>
    
    </table>
  </form>
</body>
</html>
