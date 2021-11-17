<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spotify</title>
    <link rel="stylesheet" type="text/css" href="spotifyhomecss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="">Spotify</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navb" class="navbar-collapse collapse hide">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span>Log out</a>
            </li>
            <!--<form action="" method="post">
                <label for = "search_bar">SEARCH</label>
                <input type = "text" name = "search">
                <input type="submit">
            </form>-->

            <!--<li class="nav-item">
                <a class="nav-link" href="search.php"><span class="fas fa-sign-in-alt"></span>Search</a>
            <li>-->
          </ul>
        </div>
      </nav>


      <header>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active" style="background-image: url(assets/blah.jpg)">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="display-5" style="border: black"><b><strong>Blah Blah Blah</strong></b></h2>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url(assets/savage.jpg)">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="display-5"><b><strong>SavageLove</strong></b></h2>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url(assets/sun.jpg)">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="display-5"><b><strong>Sunflower</strong></b></h2>
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
      <div class="row text-center" style="display:flex;flex-wrap:wrap;">

      <?php
    /*function search_query()
      {
        $user='root';
        $pass='';
        $db= 'ott';

        $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

        $search = $_POST['search'];
        $query1 = "SELECT * from music where Track.Name = '$search'";
        $query2 = "SELECT * from music where Genre = '$search'";
        if($search == 'gym' || $search == 'workout' || $search == 'exercise')
        {
            $query3 = "SELECT * from music where Energy >= 60";
            $rs3 = mysqli_query($conn, $query3);

            $result2 = $conn->query($query3);
			$row2 = $result2->fetch_assoc();
			//$pro = $row2["Track.Name"];
        }
        else if($search == 'road trip' || $search == 'travel' || $search == 'picnic')
        {
            $query3 = "SELECT * from music where Acousticness >= 50";
            $rs3 = mysqli_query($conn, $query3);

            $result2 = $conn->query($query3);
			$row2 = $result2->fetch_assoc();
			//$pro = $row2["Track.Name"];
        }
        else if($search == 'dance' || $search == 'party' || $search == 'groovy')
        {
            $query3 = "SELECT * from music where Danceability >= 60 or Liveness >= 30";
            $rs3 = mysqli_query($conn, $query3);

            $result2 = $conn->query($query3);
			      $row2 = $result2->fetch_assoc();
			//$pro = $row2["Track.Name"];
        }
        $rs1 = mysqli_query($conn, $query1);
        $rs2 = mysqli_query($conn, $query2);
        if($rs1)
        {

        }
        if($rs2)
        {

        }
    }-->*/

        //if(isset($_POST['submit']))
        //{
          $user='root';
          $pass='';
          $db= 'ott';

          $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
        //}
          /*$search = $_POST['search'];
          $query1 = "SELECT * from music where track_name = '$search'";
          $query2 = "SELECT * from music where genre = '$search'";
          if($search == 'gym' || $search == 'workout' || $search == 'exercise')
          {
              $query3 = "SELECT * from music where Energy >= 60";
              $rs3 = mysqli_query($conn, $query3);

              $result2 = $conn->query($query3);
              $row2 = $result2->fetch_assoc();
       //$pro = $row2["Track.Name"];
          }
          else if($search == 'road trip' || $search == 'travel' || $search == 'picnic')
          {
              $query3 = "SELECT * from music where Acousticness >= 50";
              $rs3 = mysqli_query($conn, $query3);
              echo "Error: " . $query3 . ":-" . mysqli_error($conn);
              //$result2 = $conn->query($query3);
              //zx$row2 = $result2->fetch_assoc();
       //$pro = $row2["Track.Name"];
          }
          else if($search == 'dance' || $search == 'party' || $search == 'groovy')
          {
              $query3 = "SELECT * from music where Danceability >= 60 or Liveness >= 30";
              $rs3 = mysqli_query($conn, $query3);

              $result2 = $conn->query($query3);
             $row2 = $result2->fetch_assoc();
       //$pro = $row2["Track.Name"];
          }
          $rs1 = mysqli_query($conn, $query1);
          $rs2 = mysqli_query($conn, $query2);
          if(!$rs1)
          {
            echo "Error: " . $query1 . ":-" . mysqli_error($conn);
            //$result2 = $conn->query($query1);
            //$row2 = $result2->fetch_assoc();
          }
          if($rs2)
          {
            echo "Error: " . $query2 . ":-" . mysqli_error($conn);
            //$result2 = $conn->query($query2);
            //$row2 = $result2->fetch_assoc();
          }
        }*/

        $sql0 = "SELECT * FROM music";
    		$result0 = $conn->query($sql0);
    		if ($result0->num_rows > 0) {
    // output data of each row
      echo "<table>";
    			while($row0 = $result0->fetch_assoc()) {
            $more_info = $row0['track_name'];
            $i = 0;
          echo '<div class="col-md-3 col-sm-6" style="margin: 60px;">
          <div class="img-thumbnail">
              <img src="assets/music.jpg" style="height: 250px;" class="img-fluid">
              <div class="caption">
                  <h5>
                      '.$row0["track_name"].'
                      ['.$row0["artist_name"].']
                  </h5>
                  Duration: '.$row0["Length"].' sec
              </div>
              <p>
                  <a href="" onClick = "more_info()" id = "'.$more_info.'" class="btn btn-primary btn-sm">More Info</a>
              </p>
          </div>
          </div>';
        }

      }
      ?>
        <?php
                if(isset($_POST['submit']))
                {


                  if ($result2->num_rows > 0)
                  {

                  echo '<div class="col-md-3 col-sm-6" style="margin: 60px;">
                  <div class="img-thumbnail">
                      <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                      <div class="caption">
                          <h5>
                              '.$row2["track_name"].'
                          </h5>
                      </div>
                      <p>
                          <a href="" class="btn btn-primary btn-sm">More Info</a>
                      </p>
                  </div>
                  </div>';
                  }
                }?>
            <!--<div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                    <div class="caption">
                        <h5>Perfect</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                    <div class="caption">
                        <h5>Perfect</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin: 60px;">
                <div class="img-thumbnail">
                    <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                    <div class="caption">
                        <h5>Perfect</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin:60px;">
                <div class="img-thumbnail">
                    <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                    <div class="caption">
                        <h5>Perfect</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" style="margin:60px;">
                <div class="img-thumbnail">
                    <img src="assets/perfect.jpg" style="height: 250px;" class="img-fluid">
                    <div class="caption">
                        <h5>Perfect</h5>
                    </div>
                    <p>
                        <a href="" class="btn btn-primary btn-sm">More Info</a>
                    </p>
                </div>
            </div>-->

            <!-- <% }); %> -->
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
