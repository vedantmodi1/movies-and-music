<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "ott";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
  }
  session_start();
  $userid = $_SESSION['userid'];

  if(isset($_POST['submit']))
  {
     //$calm = ($_POST['SGenre']);
     //$query = "SELECT * FROM freeze_account WHERE email_id='$emailid'";

    $subscription = $_POST['plans'];
    if($subscription == 'monthly')
    {
      $days = 30;
    }
    else
    {
      $days = 365;
    }
    $reg_date = date('Y-m-d');
    $query1 = "UPDATE user_reg set reg_date = '$reg_date', subscription_duration = '$days' where user_id = '$userid'";
    $query2 = "UPDATE user_student set reg_date = '$reg_date', subscription_duration = '$days' where user_id = '$userid'";
    $result1 = mysqli_query($conn, $query1) or die(mysql_error());
    $result2 = mysqli_query($conn, $query2) or die(mysql_error());
    //$rows = mysqli_num_rows($result);
    if ($result1 || $result2) {
    //   $_SESSION['emailid'] = $emailid;
      // Redirect to user student page
      header("Location: loginpage.html");
    }
    else {
      echo " <script>
        alert('Username or Password Invalid .!');
        location = 'login.html';
        </script>";
    }
    mysqli_close($conn);
  }
session_destroy();

?>
