<?php
$cek = "dev";
$nmdb = "dbwebikbal";
try{
	$koneksi = mysqli_connect("localhost","root","","$nmdb");

}catch(Exception $e){
    echo "Gagal Konek : " . $e->getMessage() ;
	if ($cek == "dev"){
		
mkdir("../mysql/data/$nmdb");
mkdir("../../mysql/data/$nmdb");

}
exit();
  }
?>