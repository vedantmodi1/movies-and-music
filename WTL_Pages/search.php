<!--<html>
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
            <input id="search" name = "search" type="text" placeholder="What are you looking for?" />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit">SEARCH</button>
          </div>
        </div>
        <span class="info">Gym, Party, RoadTrip?</span>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
  </body>
</html>-->

<!--<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>-->
<?php
  /*if (isset($_POST['submit'])) {
  $searchValue = $_POST['search'];
  $con = new mysqli("localhost", "root", "", "ott");
  if ($con->connect_error) {
      echo "connection Failed: " . $con->connect_error;
  } else {
      $sql = "SELECT * FROM user_reg WHERE user_id = '%$searchValue%'";

      $result = $con->query($sql);
      while ($row = $result->fetch_assoc()) {

      echo '<div class="col-md-3 col-sm-6" style="margin: 60px;">
      <div class="img-thumbnail">
          <img src="assets/music.jpg" style="height: 250px;" class="img-fluid">
          <div class="caption">
              <h5>
                  '.$row["track_name"].'
                  ['.$row["artist_name"].']
              </h5>
              Duration: '.$row["Length"].' sec
          </div>
          <p>
              <a href="" class="btn btn-primary btn-sm">More Info</a>
          </p>
      </div>
      </div>';

      }


  }
}
?>*/

/*echo<td>";
//	echo "<table>";
  //$music_id = $row0["track_name"];


  /*if ($result0->num_rows > 0){
  echo "<tr><td> Track No. : " . $row0["music_id"]. "</td></tr><tr><td> Track Name : " . $row0["track_name"] . "</td></tr><tr><td> Genre : "
  . $row0["genre"]. "</td></tr><tr><td> Duration : " . $row0["Length"]. "</td></tr>";
  echo "</table>";
  echo "</td>";
}*/
