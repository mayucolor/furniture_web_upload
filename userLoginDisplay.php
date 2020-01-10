<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Furniture</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Furniture</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Furniture<span class="color-b">Japan</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active pr-4" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="userLoginDisplay.php">Furniture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="login.html">LOG OUT</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Furnitures</h1>
            <!-- <span class="color-text-a">Grid Properties</span> -->
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Furnitures
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Search btn Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Search btn End /-->

  <!--/ Furniture Display Star /-->
  <?php
	include 'classes/sql.php';

	$s = new SQL();

	$result = $s->showAllImages();
  
  echo "<section class='property-grid grid'>
          <div class='container'>
            <div class='row'>";
	foreach($result as $row){
		$image = $row['image'];
    echo "
            <div class='col-md-4'>
              <div class='card-box-a card-shadow'>
                <div class='img-box-a'>
                  <img src='upload/$image' class='img-abc img-fluid'>
                </div>
                <div class='card-overlay'>
                  <div class='card-overlay-a-content'>
                    <div class='card-header-a'>
                      <h2 class='card-title-a'>
                        <a href='#'>sofa</a>
                      </h2>
                    </div>
                                
                    <div class='card-footer-a'>
                      <ul class='card-info d-flex justify-content-around'>
                        <div class='card-body-a'>
                          <div class='price-box d-flex'>
                            <span class='price-a'>BUY | $ 1.000</span>
                          </div>
                          <a href='property-single.html' class='link-a'>Click here to view
                            <span class='ion-ios-arrow-forward'></span>
                          </a>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
  }
  echo "</div>
      </div>
    </section>";
  

?>
  <!--/ Furniture Display End /-->   
</body>
</html>