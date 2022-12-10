<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('asset_login/fonts/icomoon/style.css');?>">

    <link rel="stylesheet" href="<?= base_url('asset_login/css/owl.carousel.min.css');?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('asset_login/css/bootstrap.min.css');?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('asset_login/css/style.css');?>">

    <title><?= $title; ?></title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('asset_login/images/ilustrasi.png');?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
          	<?= $this->session->flashdata('message'); ?>
              <div class="mb-4">
              <h3>Login Siswa</h3>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label>NIK</label>
                <input type="number" name="nik" class="form-control">
                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>

              </div>
              <div class="form-group last ">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">                
              </div>
              <div class="form-group last mb-4">
                <div class="text-center"><?=$captcha?></div><br>
                <label>Captcha</label>
                <input type="text" name="code" class="form-control" required>                
              </div>
              
             

              <input type="submit" value="Log In" class="btn btn-block btn-success">

              
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?= base_url('asset_login/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?= base_url('asset_login/js/popper.min.js');?>"></script>
    <script src="<?= base_url('asset_login/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('asset_login/js/main.js');?>"></script>
  </body>
</html>