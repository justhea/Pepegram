	<!-- main navbar kasama ang essentials-->        
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
    	<!-- if resized to a smol size navbar turns to hamburger menu-->
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"><i class="fas fa-frog"></i> PepeGram</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
        </li>
        <li>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
  
		<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control"  id="span5" placeholder="Search for russian spy">
            </form>
		</div>
   
    </nav>
  </div>
</header>