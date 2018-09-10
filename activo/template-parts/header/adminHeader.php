
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#" onclick="sectionLoader('admin')">Admin</a>
	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	  <li class="nav-item">
        <a class="nav-link" href="#" onclick="sectionLoader('login')">Logout</a>
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


