<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
    <!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 100% ;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {      
    background-color: #3385ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Sistem Inventaris RPL</h2>

<form action="<?php echo site_url('Register/registerdata') ?>" method="post">
  <div class="container">
    <label><b>Nama</b></label>
    <input type="text" placeholder="Enter nama" name="nama" required>
    <label><b>NRP</b></label>
    <input type="text" placeholder="Enter NRP" name="nrp" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label><b>No Telepon</b></label>
    <input type="text" placeholder="Enter no_tlp" name="no_tlp" required>
    <label><b>Alamat</b></label>
    <input type="text" placeholder="Enter alamat" name="alamat" required>
        
    <button type="submit">Register</button>
  </div>


</form>

</body>
</html>

</head>
<body>

</body>
</html>