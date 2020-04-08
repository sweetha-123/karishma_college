<?php
require_once('connection.php');
session_start();
$nm3=$_SESSION['nm2'];
$sql="SELECT * FROM details WHERE Name='$nm3'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0)
{
    while($row = mysqli_fetch_assoc($res))
    {
        
        $name = $row["Name"];
        $country = $row["Country"];
     
        
    }
}
else{
    echo "error";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
  <center>
  <div class="container">
  <h1>Display
  </h1>
  <p >
    <b>Name</b>: <?php echo $name; ?><br>
        <b>Country</b>:<?php echo $country; ?><br>
    </p>
    </div>
  </center>
</body>
</html>
<style type="text/css">

  .container{
   border:3px solid;
   border-color: #4caf50;
   width: 20%;
   text-align: center;
   margin-top: 20%;
   font-size: 30px; 

  }

body{
  margin: 0;
  padding: 0;
  background: url(bg.jpg) no-repeat;
  background-size: 120%;
}

</style>