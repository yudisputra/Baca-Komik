<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/reading.png')?>" type="image/x-icon" />
    <title>Baca Komik | Baca Komik Manga Terbaru</title>

    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
        
    <style type="text/css">
      body {
            font-family: 'Segoe UI';
        }
      .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
  </head>
<body>
	<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          <div class="panel panel-info">
            <div class="panel-heading">
               <h3 class="panel-title">Daftar User</h3>
            </div>
            <div class="panel-body">
        <?php echo form_open('daftar_user/insert'); ?>
            <img class="profile-img" src="<?php echo base_url();?>assets/images/users.png"
                    alt="">
            <hr>
          	<?php echo validation_errors()?>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                </div>

                <div class="form-group">
                  <label for="nickname">Nickname</label>
                  <input type="text" class="form-control" placeholder="Nickname" id="nickname" name="nickname">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                            <!--<input type="status" name="status" id="status" placeholder="Level" class="form-control">-->
                </div>

                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control" value="tanggalLahir" required="required" title="">
                </div>


                <button type="submit" class="btn btn-large btn-primary">Daftar</button>
                <button type="reset" class="btn btn-large btn-danger">Reset</button>
                <hr>
                <a href="<?php echo base_url('login_user/'); ?>"><p class="text-center" style="font-family: 'Roboto';">Jika punya akun , silahkan login</p></a>
         	<?php echo form_close(); ?>
            </div>
          </div>
        </div>
    </div> 
  </div>
</body>
