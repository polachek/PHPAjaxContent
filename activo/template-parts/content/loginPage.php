<script type="text/javascript">
function ajax_login()
{
	var email=$("#emailid").val();
	var pass=$("#password").val();
	$(".error_login").html();
	
	if(email==""){
		$(".error_login").html("Email field cannot be left blank")
	}else if(pass==""){
		$(".error_login").html("Password cannot be left blank")
	}else{
		$.ajax({
		  type:'post',
		  url:'ajax_login.php',
		  data:{
		   ajax_login:"ajax_login",
		   email:email,
		   password:pass
		  },
		  success:function(response) {
			  if(response=="success"){
				sectionLoader('admin');
			  }
			  else{
				$(".error_login").html(response);
			  }
		  }
		  });
	}
	return false;
}
</script>

<div class="main-content">
	<form method="post" action="ajax_login.php" onsubmit="return ajax_login();">
	  <input type="text" name="emailid" id="emailid" placeholder="Enter Email">
	  <br>
	  <input type="password" name="password" id="password" placeholder="***********">
	  <br>
	  <input type="submit" name="login" value="DO LOGIN" id="login_button">
	</form>
	<div class="error_login" style="color:red"></div>
</div>