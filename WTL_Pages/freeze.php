<!--<?php
/*
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = 'ott';
  $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die('Could not Connect MySql Server:' .mysqli_error());
    }
if(isset($_POST['submit']))
{
     $userid = $_POST['userid'];

     $trigger2 = "DELETE from freeze_account WHERE user_id = '$userid'";
     $result3 = $conn->query($trigger2);
     if($result3)
     {
       header("Location: loginpage.html");
     }

    //$result = mysqli_query($conn, $query) or die(mysqli_error());
    /*$rows = mysqli_num_rows($result);
    if ($rows == 1) {
    //   $_SESSION['emailid'] = $emailid;
      // Redirect to user student page
      header("Location: login.html");
    }
    else {
      echo " <script>
        alert('Email ID is wrong !');
        location = 'loginpage.html';
        </script>";
    }
    mysqli_close($conn);
}*/

/*if(isset($_POST['unfreeze']))
{
  $user='root';
  $pass='';
  $db= 'ott';
  $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
  $userid = $_POST['userid'];
  $trigger2 = "DELETE from freeze_account WHERE user_id = '$userid'";
  $result3 = mysqli_query($conn, $trigger2) or die(mysqli_error());
  if($result3)
  {
    header("Location: loginpage.html");
  }
}*/
?>-->

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="profilecss.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>
<body>
  <?php
  session_start();
  $emailid = $_SESSION['emailid'];
  ?>
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
            <h5 class="card-title text-center" style="color:rgb(255, 255, 255);font-weight: 600;">Profile</h5>
            <img class="center" src="assets/profile.jpg" alt=""/>
            <p class="center"><?php $user='root';
            $pass='';
            $db= 'ott';
            $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
            $query = "SELECT email_id from freeze_account where email_id = '$emailid'";
            $result = $conn->query($query);
            $name = $result->fetch_assoc();
            echo $name["email_id"];
            ?></p>
            <p class="center"><?php $user='root';
            $pass='';
            $db= 'ott';
            $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
            $query1 = "SELECT subscription_duration from user_reg where email_id = '$emailid'";
            $query2 = "SELECT subscription_duration from user_student where user_id = (SELECT user_id from freeze_account where email_id = '$emailid')";
            /*$result1 = $conn->query($query1);
            $result2 = $conn->query($query2);*/
            $result1 = mysqli_query($conn, $query1) or die(mysql_error());
            $result2 = mysqli_query($conn, $query2) or die(mysql_error());
            $rows1 = mysqli_num_rows($result1);
            $rows2 = mysqli_num_rows($result2);
            if($rows1 == 1)
            {
              $duration1 = $result1->fetch_assoc();
              echo "Number of days Left: ". $duration1["subscription_duration"];
            }
            if($rows2 == 1)
            {
              $duration2 = $result2->fetch_assoc();
              echo "Number of days Left: ". $duration2["subscription_duration"];
            }

            ?></p>
            <form class="form-signup" action="" method="POST">
            <div class="form-label-group">
                    <input type="password" id="oldPass" class="form-control" name="oldPass" placeholder="Old Password" required autofocus>
                    <label for="oldPass">Enter Old Password</label>
            </div>
            <div class="form-label-group">
                <input type="password" id="newPass" class="form-control" name="newPass" placeholder="New Password" required autofocus>
                <label for="newPass">Enter New Password</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="change" style="background-color: rgb(0, 0, 0); border: black;">Change Password</button>
          </form><br>
            <form class="form-signup" method="POST">
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="unfreeze" style="background-color: rgb(0, 0, 0); border: black;">UnFreeze Account</button>
            </form>
            <!--<input type="submit" value="freeze" name="freeze">-->
            <?php
            if(isset($_POST['unfreeze']))
            {
              $user='root';
              $pass='';
              $db= 'ott';
              $conn=  new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
              $trigger1 = "DELETE from freeze_account WHERE email_id = 'rishabhsshinde27@gmail.com'";
              $result3 = $conn->query($trigger1);
              if($result3)
              {
                header("Location: loginpage.html");
              }
            }
            ?>
		<?php
			if(isset($_POST['change']))
			{

				if($_POST['oldPass']==="")
				{
					echo "<span class=error>Please Enter Old Password</span>";
				}
				else
				{
					$oldPass= $_REQUEST['oldPass'];
					$sql2="SELECT * FROM customer WHERE `password` = '$oldPass'";
					$result2=mysqli_query($conn, $sql2);
					if($result2)
					{
					$nr2=mysqli_num_rows($result2);
						if($nr2===0)
						{
							echo "<span class=error>Please enter an existing PASSWORD</span>";
						}
						else
						{
							$oldPass= $_REQUEST['oldPass'];
							if($_POST['newPass']!="")
							{
								$newPass= $_REQUEST['newPass'];
								$sql2="UPDATE customer SET password='$newPass' WHERE password ='$oldPass'";
								mysqli_query($conn, $sql2);
							}
						echo "<span class=succ>Record changed Successfully!</span>";
					}
				 }
			}
		}
		?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function myFunction1() {
      var student = document.getElementById("student").value;
      // var regular = document.getElementById("regular").value;
      var text = document.getElementById("university");
      if (student == "yes"){
        text.style.display = "block";
      }
    }
    function myFunction2() {
      // var student = document.getElementById("student").value;
      var regular = document.getElementById("regular").value;
      var text = document.getElementById("university");
      if (regular == "no"){
        text.style.display = "none";
      }
    }
    </script>

</body>
</html>
