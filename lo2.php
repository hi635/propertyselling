<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 align="center">Login</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">login</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->


 <form action="logincheck.php" class="container">
  <h1>Login</h1>
  
  
  <label for = "email"> <b>Email</b>
  </label>
  
  <input type="text" placeholder="Enter Email" name="email" required /><br><br>
  
  <label for="psw"
  <b>Password</b></label>
  
  <input type="password" placeholder="Enter password" name="psw" required /><br><br>
  
  <button type="submit" class="btn"> Login</button>
</from><br><br>

<?php include('include/footer.php');?>