<?php
   include "variabel.php";


if ($cek == "dev"){

  

    
    
 try{

    

if (is_dir("../../mysql/data/$namadb")) {
    mkdir("../../mysql/data/$namadb");
} else if (is_dir("../../../mysql/data/$namadb")) {
    mkdir("../../../mysql/data/$namadb");
}
   
  
    $kon = mysqli_connect("localhost","root","","$namadb");
    echo "Koneksi Berhasil";



if (mysqli_multi_query($kon, $isitb)) {
    echo "Tabel berita berhasil diubah.";
} else {
    echo "Error: " . mysqli_error($kon);
}
header("location:index.php");

}catch(Exception $e){
echo "Gagal buat : " . $e->getMessage() ;

exit();
};

}

?>