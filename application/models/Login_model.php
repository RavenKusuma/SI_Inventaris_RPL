<body>
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <div class="panel panel-primary" style="margin-top:25%">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
      <form class="" action="<?php echo base_url();?>Login/logindata" method="post">
          <input type="text" name="username" class="form-control" placeholder="Username"><br>
          <input type="password" name="password"  class="form-control" placeholder="Password"><br>
          <button type="submit" name="button" class="btn btn-primary" style="margin-left:85%">Login</button>
      </form>
    </div>
  </div>
  <?php echo $this->session->flashdata('message');?>
</div>
</div>
</body>
</html>
S