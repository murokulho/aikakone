<!DOCTYPE html>
<head>
</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","","aikakone");
if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}
echo "Connected to the database succesfully!";

$sql = "SELECT * FROM rock";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  echo "<h3>All vinyls</h3>";
  echo "<table border='1'>
          <tr><th>artist</th>
          <th>album</th>
          <th>grade</th>
          <th>price</th>
          <th>comments</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)){
  echo "<tr>
          <td>" . htmlspecialchars($row["artist"]) . "</td>
          <td>" . htmlspecialchars($row["album"]) . "</td>
          <td>" . htmlspecialchars($row["grade"]) . "</td>
          <td>" . htmlspecialchars($row["price"]) . "</td>
          <td>" . htmlspecialchars($row["comments"]) . "</td>
        </tr>";
}
echo "</table>";
}else{
  echo "No albums found.";
}

mysqli_close($conn);

?>
</body>
</html>