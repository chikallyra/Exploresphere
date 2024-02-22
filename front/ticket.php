<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisata</title>
  <link rel="shortcut icon" href="assets/images/wonderful.png" type="image/svg" />
  <link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
  <link rel="stylesheet" href="./assets/ticket.css" />
</head>
<body>

  <div class="container">
    <br><br><br><br><br><br><br><br><br><br>
    <h1 class="upcomming">tiket anda</h1>
    <div class="item">
      <div class="item-right">
      <img src="assets/images/Codabar.png" alt="QR" width= "130px" style="
    margin: -49px;"/>
        <span class="up-border"></span>
        <span class="down-border"></span>
      </div> <!-- end item-right -->
      
      <?php 
      include "../koneksi.php";
      $id = $_GET['id'] ?? '';

      $sql = "SELECT * FROM tb_booking WHERE id=$id"; 
      $query = mysqli_query($konek, $sql);

      if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
      ?>

      <div class="item-left">
        <p class="event">Bandung, Jawa Barat, Indonesia</p>
        <h2 class="title"><?php echo $row['wisata']?></h2>
        
        <div class="sce">
          <p><?php echo $row['nama']?> <br/> <?php echo $row['tgl_pesan']?></p>
        </div>
        <?php }?>
        <div class="fix"></div>
        <br><button class="tickets">Scan Tiket di Pintu Masuk</button>
      </div> <!-- end item-right -->
    </div> <!-- end item -->
  </div>
</body>
</html>
