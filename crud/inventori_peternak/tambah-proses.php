<?php
   

    if(isset($_POST['submit'])){
        
        include 'koneksi.php' ;
        
        $Bulan    = $_POST['Bulan']; 
        $Id_Peternakan   = $_POST['Id_Peternakan']; 
        $Nama_Peternakan    = $_POST['Nama_Peternakan']; 
        $Jumlah_Stok    = $_POST['Jumlah_Stok'];
        $Pemakaian_Pakan = $_POST['Pemakaian_Pakan'];
        $Tanggal_Pemakaian  = $_POST['Tanggal_Pemakaian'];
        
        
        $query = mysqli_query($koneksi, "INSERT INTO inventori_pakan VALUES ('$Bulan', '$Id_Peternakan', '$Nama_Peternakan', '$Jumlah_Stok','$Pemakaian_Pakan', '$Tanggal_Pemakaian')");
        
       echo "Data berhasil disimpan";
       header("location:inventoriptrnk.php");


    } else{
        echo "data ga masuk";
    }

?>