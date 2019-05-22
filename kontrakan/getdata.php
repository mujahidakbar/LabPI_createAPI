<?php
 //Memanggil conn.php yang telah kita buat sebelumnya
 include "conn.php";
 
 //Syntax MySql untuk melihat semua record yang
 //ada di tabel animal
 //$sql = "SELECT * FROM kontrakan";
  
 //Execetute Query diatas
 //$query = mysqli_query($sql);
 //while($dt=mysqli_fetch_array($query)){
  //$item[] = array(
   //"id"=>$dt["id"],
   //"nama"=>$dt["nama"],
   //"alamat"=>$dt["alamat"],
   //"jurusan"=>$dt["jurusan"]
  //);
 //}

 // jalankan query
$result = $koneksi->query("SELECT * FROM kontrakan");
 
// tampilkan query
while ($row= $result->fetch_row())
{

   echo "$row[0] $row[1] $row[2] $row[3]";
   echo "<br />";
}
 
 //Menampung data yang dihasilkan
 $json = array(
    'result' => 'Success',
    'item' => $row
   );
 
 //Merubah data kedalam bentuk JSON
 echo json_encode($json);
?>