<?php
	$relativePath = $_SERVER['DOCUMENT_ROOT'];
	include ($relativePath.'/activo/session.php');
?>

<script type="text/javascript" src="scripts/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinyMCE.init({
      mode : "textareas"
    });
</script>

<script type="text/javascript">
$( document ).ready(function() {
    ajax_content_load("home")
});

function ajax_content()
{
	var section=$("#section_id").text().toLowerCase();
	var content =  tinyMCE.activeEditor.getContent()

	$(".error_login").html("");
	$(".ok_post").html("");	
	
	if(section==""){
		$(".error_login").html("Section content can not be null")
	}else{
		$.ajax({
		  type:'post',
		  url:'ajax_content.php',
		  data:{
		   ajax_content:"ajax_content",
		   section:section,
		   content:content
		  },
		  success:function(response) {
			  if(response=="success"){
				$(".ok_post").html("Content Saved");
			  }
			  else{
				$(".error_login").html(response);
			  }
		  }
		  });
	}
	return false;
}

function ajax_content_load(mysection)
{
	$("#section_id").html(mysection);
	$(".error_login").html("");
	
	if(mysection==""){
		$(".error_login").html("Section content can not be null")
	}else{
		$.ajax({
		  type:'post',
		  url:'ajax_content.php',
		  data:{
		   ajax_content_load:"ajax_content_load",
		   section:mysection
		  },
		  success:function(response) {
			  if(response!="fail"){
				tinyMCE.activeEditor.setContent(response);
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
	<div id="section_admin"><span>Content for: </span><span id="section_id" style="font-weight:bold">Home</span></div>
	<form method="post" action="ajax_content.php" onsubmit="return ajax_content();">
		<p>
		  <textarea id="section_content" name="content" cols="50" rows="15">This is some content that will be editable with TinyMCE.</textarea>
		  <input type="submit" value="Save" />
		</p>
	</form> 
	<div class="ok_post" style="color:green"></div>
	<div class="error_login" style="color:red"></div>
</div>

