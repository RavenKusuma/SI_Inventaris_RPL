<body>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  <div class="panel panel-success" style="margin-top:25%">
    <div class="panel-heading">Register</div>
    <div class="panel-body">
      <form class="" action="<?php echo base_url();?>Register/registerdata" method="post">
          <input type="text" name="username" class="form-control" placeholder="Username"><br>
          <input type="password" name="password"  class="form-control" placeholder="Password"><br>
          <button type="submit" name="button" class="btn btn-success" style="margin-left:80%">Register</button>
      </form>
    </div>
  </div>
  <?php echo $this->session->flashdata('message');?>
</div>
</body>
</html>