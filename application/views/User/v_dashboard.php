<body>
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <div class="panel panel-primary" style="margin-top:25%">
    <div class="panel-heading">Selamat Datang</div>
    <div class="panel-body">
      <p>Selamat datang <?php echo $username?> password yang anda gunakan adalah <?php echo $password?>. anda login sebagai <?php echo $rule?>  </p>
      <a href="<?php echo base_url();?>User/logout" type="submit" name="button" class="btn btn-primary" style="margin-left:85%">Logout</a>
    </div>
  </div>
</div>
</div>
</body>
</html>
