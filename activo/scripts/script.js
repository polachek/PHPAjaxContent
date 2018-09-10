function sectionLoader(destPath) {
	if(destPath=="" || destPath=="index"){destPath="home"}
	
	if(destPath == gid){
		$('#centerRegion').load('template-parts/content/'+ d.centerRegion + '.php');
	}else{
		$.getJSON('siteregions.json', function (data) {
			$.each(data, function(index, d){
				if(d.id == destPath){
					if(d.headerRegion != gheaderRegion){
						$('#headerRegion').load('template-parts/header/'+ d.headerRegion + '.php');
					}
					if(d.leftRegion != gleftRegion){
						$('#leftRegion').load('template-parts/left-navbar/'+ d.leftRegion + '.php');
					}
					if(d.centerRegion != gcenterRegion){
						$('#centerRegion').load('template-parts/content/'+ d.centerRegion + '.php');
					}
					if(d.rightRegion != grightRegion){
						$('#rightRegion').load('template-parts/right-navbar/'+ d.rightRegion + '.php');
					}
					if(d.footerRegion != gfooterRegion){
						$('#footerRegion').load('template-parts/footer/'+ d.footerRegion + '.php');
					}					
					gid = d.id;
					gheaderRegion = d.headerRegion;
					gleftRegion = d.leftRegion;
					gcenterRegion = d.centerRegion;
					grightRegion = d.rightRegion;
					gfooterRegion = d.footerRegion;
					window.history.pushState({id: destPath}, destPath, destPath);
					return false;
				}		
			});
		
	   });
	}	
}

function ajax_content_section(mysection)
{
	$(".main-content").html("");
	
	if(mysection==""){
		$(".main-content").html("Error loading section content")
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
				$(".main-content").html(response);
			  }
			  else{
				(".main-content").html(response);
			  }
		  }
		  });
	}
	return false;
}