<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="scripts/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/main.css">
<script src="scripts/script.js"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script>
var gid = "";
var gheaderRegion = "";
var gleftRegion = "";
var gcenterRegion = "";
var grightRegion = "";
var gfooterRegion = "";

$(document).ready(function(){
  var path = window.location.pathname;
  path = path.replace('/activo/', '');
  if(path=="" || path=="index"){path="home"}
  
  $.getJSON('siteregions.json', function (data) {
	  var findPath = false;
	    $.each(data, function(index, d){
			if(d.id == path){
				$('#headerRegion').load('template-parts/header/'+ d.headerRegion + '.php');
				$('#leftRegion').load('template-parts/left-navbar/'+ d.leftRegion + '.php');
				$('#centerRegion').load('template-parts/content/'+ d.centerRegion + '.php');
				$('#rightRegion').load('template-parts/right-navbar/'+ d.rightRegion + '.php');
				$('#footerRegion').load('template-parts/footer/'+ d.footerRegion + '.php');
				gid = d.id;
				gheaderRegion = d.headerRegion;
				gleftRegion = d.leftRegion;
				gcenterRegion = d.centerRegion ;
				grightRegion = d.rightRegion;
				gfooterRegion = d.footerRegion;
				findPath = true;				
				return false;
			}			
		});
		if(!findPath){
			$('#centerRegion').html('404');
		}
    
  });
  
   $('#sidebarCollapse').on('click', function () {
        $('#leftRegion').toggleClass('active');
    });
	
});// document.ready


</script>
</head>
	<body>
		<div id="wrapper">
		
			<div id="sidebar-wrapper">
				<nav id="leftRegion">
					<!-- leftRegion HTML content -->
				</nav>
			</div>
			
			<header id="headerRegion">
				<!-- headerRegion HTML content -->
			</header>
			
			<div class="row main-row">				
				<div class="col-sm-8">
					<div id="centerRegion">
						<!-- centerRegion HTML content -->
					</div>
				</div>
				
				<div class="col-sm-4">
					<div id="rightRegion">
						<!-- rightRegion HTML content -->
					</div>
				</div>
			</div>

		</div>
		<div id="footerRegion">
			<!-- footerRegion HTML content -->
		</div>
	</body>
</html>