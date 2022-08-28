<?php include('include/header.php');       
  include ('connection.php');
	   ?>
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

<form action="logincheck.php" method="post">  
        <?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?>
<form action="logincheck.php" method="post" align="center" >

			 <?php
		if(isset($_GET['msg']))
		 echo  $_GET['msg'];
		 
		 ?>		
			<table width="319" height="90" align="center" cellpadding="7">
			<tr>
			<td width="98" style="font-size:24px">username:</td>
			<td width="185"><input type="text" name="unm" placeholder="username"></td>
			</tr>
						<tr>
			<td style="font-size:24px">password:</td>
			<td><input type="password" name="password" placeholder="password"></td>
			</tr>
						<tr>
			<td>&nbsp;</td>
			<td ><input type="submit" value="submit" style="font-size:24px" >
			      <input type="reset" value="reset" style="font-size:24px" >
			</td>
			</tr>
			</tr>
						<tr>
			<td>&nbsp;</td>
			<td ><a href="registration.php" style="font-size:24px">Registration</a></td>
			</tr>
		
</table>
           
		</div>
		<?php include('include/footer.php');?>