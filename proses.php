<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mini Market Jumbo</title>
    <link rel="shortcut icon" href="img/dp.jpg" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<!-- Sintak PHP untuk cari diskon -->
<?php
  if(isset($_POST['submit'])){
    $nama_brg = $_POST['nama_brg'];
    $hrg_brg  = $_POST['hrg_brg'];
    $jmlh_brg = $_POST['jmlh_brg'];
  
    $total = $hrg_brg * $jmlh_brg;

    if($total >= 500000){
        $diskon_txt = "Anda Mendapat Diskon 10%";
        $diskon     = $total * 10/100;
    }
    elseif($total >= 100000){
        $diskon_txt = "Anda Mendapat Diskon 5%";
        $diskon     = $total * 5/100;
    }
    else{
      $diskon_txt ="Anda Tidak Mendapatkan Diskon";
      $diskon = 0;
    }

    $jmlh_total = $total - $diskon;
  }
?>

<!-- Sintak PHP Untuk cari diskon -->



  <!-- Tampilan Cetak -->
  
<section class="info">   
<div class="container">
  <form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label for="nama_brg" class="col-sm-2 col-sm-offset-3 control-label">Nama Barang</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" nama="nama_brg" id="nama_brg" value="<?php echo "$nama_brg"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="hrg_brg" class="col-sm-2 col-sm-offset-3 control-label">Harga Barang</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" nama="hrg_brg" id="hrg_brg" value="<?php echo "$hrg_brg"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="jmlh_brg" class="col-sm-2 col-sm-offset-3 control-label">Jumlah Barang</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" nama="jmlh_brg" id="jmlh_brg" value="<?php echo "$jmlh_brg"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="total" class="col-sm-2 col-sm-offset-3 control-label">Total</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" nama="total" id="total" value="<?php echo "$total"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="diskon_txt" class="col-sm-2 col-sm-offset-3 control-label">Status Diskon</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" nama="diskon_txt" id="diskon_txt" value="<?php echo "$diskon_txt"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="diskon" class="col-sm-2 col-sm-offset-3 control-label">Jumlah Diskon</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" nama="diskon" id="diskon" value="<?php echo "$diskon"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="jmlh_total" class="col-sm-2 col-sm-offset-3 control-label">Total Bayar</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" nama="jmlh_total" id="jmlh_total" value="<?php echo "$jmlh_total"; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
      <button type="submit" name="back" class="btn btn-info"  data-toggle="tooltip" title="Cetak Bukti Pembelian">
        <span class="glyphicon glyphicon-print"></span>
      Cetak Struk
    </button>
    </div>
  </div>
  </form>
</div>
</section>

<!-- Akhir Tampilan cetak -->


<!-- go back -->
<?php
if(isset($_POST['back'])){
    echo "<script>alert('Maaf !! Ceta Belum Bisa.');window.location='index.php'</script>";
}
?>
<!-- akhir go back -->


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<!-- Akhir JS -->





<!-- Form Toogle atau modal atau pop up untuk info -->

      <div class="modal fade" id="info" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Info</h4>
            </div>
            <form>
              <div class="modal-body">

                    <h4 class="text-justify">Program ini dibuat untuk memenuhi tugas kuliah tentang fungsi <mark><em>if</em></mark>,<mark><em>elseif</em></mark> dan <mark><em>else</em></mark> dari Pemograman PHP</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table-condensed">
                      <tr>
                        <td>Nama Mahasiswa</td>
                        <td>: Salahul Bain</td>
                      </tr>
                      <tr>
                        <td>Nama Dosen Pembimbing </td>
                        <td>: Zulfan, S.T., M.T.</td>
                      </tr>
                      <tr>
                        <td>Mata Kuliah</td>
                        <td>: Pemograman II</td>
                      </tr>
                      </table>
                    </div>

              </div>
              <div class="modal-footer">
                <a href="index.php" type="button" class="btn btn-danger" data-toggle="tooltip" title="Tutup">
                    <span class="glyphicon glyphicon-remove"></span>
                    Tutup
                </a>
              </div>
            </form> 
          </div>
        </div>                    
      </div>               

<!-- Akhir Form toogle untuk info -->



    <!-- footer -->
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <p>&copy; 2019 | Powered By <a href="" data-toggle="modal" data-target="#info">Salahul Bain</a>.</p>
            </div>
          </div>
        </div>
      </footer>

    <!-- Akhir Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>


