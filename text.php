<php
 session_start();
	  $lid=$_SESSION["l_id"];
 if(!isset($_SESSION['l_id']))
	  {
      header("Location:../home/home.php"); 
	  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="navBar">
<h2>LifeStream</h2>
<ul>
  <li><a href="../logout/logout.php">Logout</a></li>
  <li><a href="Login_Acceptor.php">MyProfile</a></li>
  <li><a href="../home/home.php">Home</a></li>
</ul>
</div>
<?php
$conn=mysqli_connect("localhost","root","","blood_info");
$sql="select name from acceptor_register where l_id='$lid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($data=mysqli_fetch_array($result))
	{
?>
<h3 style="color:#c02729; width: 200px; height: 6.889;"> Welcome <?php echo $data["name"] ?> </h3>
<?php
	}
}
?>

<section class="options" id="op">
<div id="box">
<div id="edit">
<button onclick="window.location.href='../acceptor_edit_profile/edit_acceptor.php'">Edit Profile</button>
</div>
<div id="post">
<button onclick="window.location.href='../post_request/PostRequest.php'">Post Request</button>
</div>
<div id="history">
<button onclick="window.location.href='../acceptor_history/history.php'">History</button>
</div>
<div id="de">
<button onclick="window.location.href='../confirm/confirm_deactivate_acceptor.php'">Deactivate</button>
</div>
</div>
</section>
</body>
</html>
