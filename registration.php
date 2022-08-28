<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Registration</h1>
            <ul class="breadcrumbs">
                <li><a href="login.php">Home</a></li>
                <li class="active">login</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end --><div class="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<script type="text/javascript">
function validate(frm)
{
	if(frm.unm.value == "")
	{
		alert("enter user name");
		frm.unm.focus();
		return false;
	}
	else if(frm.pwd.value == "")
	{
		alert("enter user password");
		frm.pwd.focus();
		return false;
	}
	else if(frm.cpwd.value == "")
	{
		alert("enter user confirm password");
		frm.cpwd.focus();
		return false;
	}
	else if(frm.add.value == "")
	{
		alert("enter user address");
		frm.add.focus();
		return false;
	}
	else if(frm.city.value == "")
	{
		alert("enter user city name");
		frm.city.focus();
		return false;
	}
	else if(frm.state.value == "")
	{
		alert("enter user state name");
		frm.state.focus();
		return false;
	}
	else if(frm.pno.value == "")
	{
		alert("enter user contact no");
		frm.pno.focus();
		return false;
	}
	else if(frm.eid.value == "")
	{
		alert("enter user email id");
		frm.eid.focus();
		return false;
	}
	else if(frm.pwd.value!=frm.cpwd.value)
	{
		alert("reenter your correct password");
		frm.pwd.focus();
		return false;
	}
	else if(frm.cap.value == "")
	{
		alert("enter captcha code");
		frm.cap.focus();
		return false;
	}
	/*else if(frm.cap.value != frm.h1.value)
	{
		document.write(frm.h1.value);
		var b= <?php echo $a; ?>;
		alert(b);
		alert("enter right code");
		frm.cap.focus();
		return false;
	}*/
	return true;	
}


function onlyNumbers(e)
{
	var charCode=e.which || e.keyCode;
	//8-back space 9-tab key 48-57 0 to 9
	if((charCode >= 48 && charCode <=57) || charCode==9 || charCode==8)
	return true;
	
	return false;
}


function onlyChar(e)
{
	var charCode=e.which || e.keyCode;
	if((charCode >= 65 && charCode <=90)|| (charCode >= 97 && charCode <=122) || charCode==9 || charCode==46 || charCode==8)
	return true;
	
	return false;
}

function email1()
{
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(reg.test(frm.eid.value) == false)
	{
		alert ('invalid email address');
		frm.eid.focus();
		return false;
		
	}
}
</script>

<form name="frm" method="post" action="login.php" onSubmit="return validate(this)">
<?php
			if(isset($_GET['msg']))
			echo $_GET['msg'];
			?><br>
<table align="center" >
<tr><br />

<td colspan="2" align="center"><h2 class="style1"><font color="#CCCCCC">Registration Form</font></h2></td>
</tr>

<tr>
<font color="#00CCFF"><td><br />User Name :</td></font>
<td><br /><input type="text" name="unm"  onkeydown="return onlyChar(event);"/></td>
</tr>
<tr>
<td><br />Password :</td>
<td><br /><input type="password" name="pwd" /></td>
</tr>
<tr>
<td><br />Conform Password :</td>
<td><br /><input type="password" name="cpwd" /></td>
</tr>
<tr>
<td><br />Address :</td>
<td><br /><textarea name="add" rows="5" cols="20" ></textarea></td>
</tr>
<tr>
<td><br />City :</td>
<td><br /><input type="text" name="city" /></td>
</tr>
<tr>
<td><br />State :</td>
<td><br /><input type="text" name="state" /></td>
</tr>
<tr>
<td><br />E-mail ID :</td>
<td><br /><input type="text" name="eid" onBlur="return email1();" /></td>
</tr>
<tr>
<td><br />Contact No :</td>
<td><br /><input type="text" name="pno" onKeyDown="return onlyNumbers(event);" /></td>
</tr>

</font>
<tr>
<td><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"  class="btn" value="Register now" /></td>
<td><br /><input type="reset" name="reset"  class="btn" value="Clear" /></td>
</tr>
</table>
</form><br /><br />


<?php include('include/footer.php');?>