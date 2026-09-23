//Server testing
//Not necessary

<?php
$conn = mysqli_connect("localhost","root","","aikakone");
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$artist = "PMMP";
$album = "Kovemmat Kädet";
$kunto = "ex";
$price = "30€";
$comments = "";
$sql = "INSERT INTO rock (artist,album,kunto,price,comments) VALUES ('$artist','$album','$kunto','$price','$comments')";
if(mysqli_query($conn,$sql)){
  echo "New vinyl listing added!";
}else{
  echo "Error: " . mysqli_error($conn);
}
?>