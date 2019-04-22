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
    


    <!-- Jumbotron -->

      <div class="jumbotron text-center">
        <img src="img/jb.jpg" class="img-circle">
        <h1>MINI MARKET JUMBO</h1>
        <p>Menjual Segala Jenis Yang Tidak Dijual</p>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambah" data-toggle="tooltip" title="Input Data Barang">
          <span class="glyphicon glyphicon-shopping-cart"></span>
          Input Data
        </button>
      </div>

    <!-- Akhir Jumbotron -->
   


<!-- Form Toogle atau modal atau pop up untuk tambah -->

      <div class="modal fade" id="tambah" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Input Data Pembelian</h4>
            </div>
            <form action="proses.php" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label for="nama_brg">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_brg" id="nama_brg" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="form-group">
                  <label for="hrg_brg">Harga Barang</label>
                  <input type="number" class="form-control" name="hrg_brg" id="hrg_brg" placeholder="Masukkan Harga Barang" required>
                </div>
                <div class="form-group">
                  <label for="jmlh_brg">Jumlah Barang</label>
                  <input type="number" class="form-control" name="jmlh_brg" id="jmlh_brg" placeholder="Masukkan Jumlah Barang" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-success" data-toggle="tooltip" title="Proses Data Barang">
                    <span class="glyphicon glyphicon-ok"></span>
                  Proses
                </button>
              </div>
            </form> 
          </div>
        </div>                    
      </div>               

<!-- Akhir Form toogle untuk tambah -->



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