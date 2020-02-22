<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ADMIN-PANEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
      <li class="nav-item <?php echo($_GET['page'] == 'orders' ? 'active': '') ?>">
        <a class="nav-link" href="?page=orders">Orders</a>
      </li>
	  <li class="nav-item <?php echo($_GET['page'] == 'banners' ? 'active': '') ?>">
        <a class="nav-link" href="?page=banners">Banners</a>
      </li>
      <li class="nav-item <?php echo($_GET['page'] == 'products' ? 'active': '') ?>">
        <a class="nav-link" href="?page=products">Products</a>
      </li>
	  <li class="nav-item <?php echo($_GET['page'] == 'categories' ? 'active': '') ?>">
        <a class="nav-link" href="?page=categories">Categories</a>
      </li>
	  <li class="nav-item <?php echo($_GET['page'] == 'settings' ? 'active': '') ?>">
        <a class="nav-link" href="?page=settings">Settings</a>
      </li>
	  <li class="nav-item <?php echo($_GET['page'] == 'translate' ? 'active': '') ?>">
        <a class="nav-link" href="?page=translate">Translate</a>
      </li>
	  <li class="nav-item <?php echo($_GET['page'] == 'languages' ? 'active': '') ?>">
        <a class="nav-link" href="?page=languages">Languages</a>
      </li>
	  

    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="exit"> <a href="?exit"> Exit</a></button> 
	  <input type="hidden" name="login" value="">
	  <input type="hidden" name="password" value="">
    </form>
  </div>
</nav>
