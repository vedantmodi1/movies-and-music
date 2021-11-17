<html>
<head>
  <title>Froze Account</title>
  <link rel="stylesheet" type="text/css" href="signupnetflixcss.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>
<body>

  <div class="row">
  <img id="logoicon" src="assets/netfliximg.png">
  <img id="logoicon" src="assets/spotifyimg.png">
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-12 col-lg-5 mx-auto">
        <div class="card card-signup my-5"  id="container1">
          <div class="card-body">
            <h5 class="card-title text-center" style="color:rgb(255, 255, 255);font-weight: 600;">!! OOPS !!</h5>
            <form class="form-signup" action="" method="POST">

                <h2>Your Account is Temporarily Frozen !!</h2><br><h2> Click Below to Unfreeze </h2>
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" name="emailid" placeholder="Email ID" required autofocus>
                    <label for="inputEmail">Email ID</label>
                </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="unfreeze" style="background-color: rgb(0, 0, 0); border: black;">Unfreeze</button>
            </form>
            <?php
                      if(isset($_POST['unfreeze']))
                      {
                        $user='root';
                        $pass='';
                        $db= 'ott';
                        $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
                        $emailid = $_POST['emailid'];
                        $trigger2 = "DELETE from freeze_account WHERE email_id ='$emailid'";
                        $result3 = mysqli_query($conn, $trigger2);
                        if($result3)
                        {
                          header("Location: loginpage.html");
                        }
                        else{
                         echo "Error: " . $trigger2 . ":-" . mysqli_error($conn);
                       }
                      }
                      ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html
