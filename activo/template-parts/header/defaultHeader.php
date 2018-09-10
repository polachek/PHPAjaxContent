<nav class="navbar navbar-expand-lg navbar-light bg-light home-navbar">

  <a class="navbar-brand" href="#" onclick="sectionLoader('home')">
	<img src="images/home.png" alt="Home">
  </a>
	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<li class="nav-item">
        <a class="nav-link" href="#" onclick="sectionLoader('home')">Home</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" onclick="sectionLoader('sports')">Sports</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" onclick="sectionLoader('casino')">Casino</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" onclick="sectionLoader('poker')">Poker</a>
      </li>
    </ul>
  </div>
  <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
</nav>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


