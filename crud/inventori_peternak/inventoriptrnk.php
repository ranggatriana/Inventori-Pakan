<html>
<head>
</head>
<body>
    <form action="tambah-proses.php" method="post">
	<table border="0">
		<tr>
        <td>Bulan</td>
        <td>
          <select name="Bulan"required>
            <option value="">Pilih Bulan</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
          </select>
          <td> Jumlah stok </td>
          <td> <input type="text" name="Jumlah_Stok">kg
        </td>
      </tr>
        <tr>
			<td> Id peternakan </td>
			<td> <input type="text" name="Id_Peternakan"></td>
			<td> Pemakaian pakan </td>
			<td> <input type="date&time" name="Pemakaian_Pakan">kg</td>
		</tr>
		
		<tr>
            <td> Nama Peternak </td>
            <td> <input type="text" name="Nama_Peternakan"></td>
            <td> Tanggal Pemakaian </td>
            <td> <input type="date" name="Tanggal_Pemakaian"></td>
        </tr>
        <tr>
            <td>
            
			<input type="submit"name="submit" value="Simpan">

             </td>
            <td>
            <input type="reset"name="push" value="Reset"></td>
	</tr>
	</table>
</td>
</tr>
</table>
</form>

	            <table cellpadding="6" cellspacing="0" border="1">
                
                <tr>
                <th>Bulan </th>
                <th>Id Peternak</th>
                <th>Nama Peternak</th>
                <th>Jumlah Stok</th>
                <th>Pemakaian pakan</th>
                <th>tanggal pemakaian</th>              
                </tr>
<?php
include "koneksi.php";
$q ="select * from inventori_pakan order by id_peternak";
$query=mysqli_query($koneksi,$q); 
if(mysqli_num_rows($query)==0){
    echo '<tr><td colspan="8"><center>Tidak ada data!</center></td></tr>';
}else{
    while($data=mysqli_fetch_assoc($query)){
        echo '<tr>';
        echo '<td>'.$data['Bulan'].'</td>';
        echo '<td>'.$data['Id_Peternak'].'</td>';
        echo '<td>'.$data['Nama_Peternak'].'</td>';
        echo '<td>'.$data['Jumlah_Stok'].'</td>';
        echo '<td>'.$data['Pemakaian_Pakan'].'</td>';
        echo '<td>'.$data['Tanggal_Pemakaian'].'</td>';
        
        echo '<td><center><a href="edit.php"?id='.$data['Id_Peternak'].'">Edit</a> / <a href="hapus_Peternakan.php?id='.$data['Id_Peternak'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
        echo '</tr>';
    }
}
?>
    <!-- include "koneksi.php";
    $query=mysql_query(Select * from) -->
        </div>
	</body>
</html>