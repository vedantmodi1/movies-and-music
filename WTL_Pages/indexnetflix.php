<!DOCTYPE html>
<html lang="en">
<head>
    <title>Netflix</title>
    <link rel="stylesheet" type="text/css" href="netflixhomecss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="">Netflix</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navb" class="navbar-collapse collapse hide">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Log out</a>
          </li>
        </ul>
      </div>
    </nav>
<!--  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="colorlib.com">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
      <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
      <div class="s130" style = "height: 20px">

        <form>
          <div class="inner-form">
            <div class="input-field first-wrap">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="5" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </div>
              <input id="search" type="text" placeholder="What are you looking for?" />
            </div>
            <div class="input-field second-wrap">
              <button class="btn-search" type="button">SEARCH</button>
            </div>
          </div>
          <span class="info">Gym, Party, RoadTrip?</span>
        </form>
      </div>
      <script src="js/extention/choices.js"></script>
    </body>
  </html>-->

      <!-- <div class="container">
        <% if(error && error.length > 0) {%>
        <div class="alert alert-danger" role="alert">
          <%=error%>
        </div>
        <% } %>
        <% if(success && success.length > 0) {%>
        <div class="alert alert-success" role="alert">
          <%=success%>
        </div>
        <% } %>

      </div> -->


      <!-- <div class="container"> -->
        <!-- <header class="jumbotron">
            <div class="container">
                <h1>NETFLIX</h1>
            </div>

        </header> -->
        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(assets/extraction.jpg)">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-5" style="border: black"><b><strong>Extraction</strong></b></h2>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: url(assets/nysm2.jpg)">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-5"><b><strong>Now You See Me 2</strong></b></h2>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: url(assets/bb2.jpg)">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-5"><b><strong>Breaking Bad</strong></b></h2>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
          </header>
    <br>


    <?php

    $user='root';
    $pass='';
    $db= 'ott';

    $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
    $sql0 = "SELECT * FROM shows";
    $result0 = $conn->query($sql0);
    if ($result0->num_rows > 0) {
      echo "<table>";
    			while($row0 = $result0->fetch_assoc()) {
      echo '<div class="col-md-3 col-sm-6" style="margin: 60px;">
      <div class="img-thumbnail">
          <img src="assets/movies.jpg" style="height: 250px;" class="img-fluid">
          <div class="caption">
              <h5>
                  '.$row0["title"].'
                  ['.$row0["type"].']
              </h5>
              Duration: '.$row0["duration"].' sec
          </div>
          <p>
              <a href="" class="btn btn-primary btn-sm">More Info</a>
          </p>
      </div>
      </div>';
      //echo "</table>";
    }
  }
    ?>
        <div class="row text-center" style="display:flex;flex-wrap:wrap;">
            <!-- <% campgrounds.forEach(function(campground){ %> -->
                <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/extraction.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/extraction.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/extraction.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin:60px;">
                <div class="img-thumbnail">
                    <img src="assets/extraction.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin:60px;">
                <div class="img-thumbnail">
                    <img src="assets/extraction.jpg" class="img-fluid">
                    <div class="caption">
                        <h5>Extraction</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <!-- <% }); %> -->
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
