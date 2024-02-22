<?php 
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$date = $_POST['tgl'];
$org = $_POST['jumlah_org'];
$wisata = $_POST['wisata'];

$query = "INSERT INTO tb_booking (nama, email, nohp, tgl_pesan, jumlah_org, wisata) VALUES 
('$nama', '$email', '$nohp', '$date', '$org', '$wisata')";
$go = mysqli_query($konek, $query);

if ($go) {
    $last_id = mysqli_insert_id($konek);
    header("Location: ticket.php?id=$last_id");
    exit();
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='main.php';
    
    </script>";
  
}
 ?>