<?php
include 'dbh.php';
  $commentNewCount = $_POST['commentNewCount'];
  $sql = "SELECT * FROM  komentet LIMIT $commentNewCount";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    while ($row = mysqli_fetch_assoc($res))
    {
      echo "<p><b>";
      echo $row['AUTHOR'];
      echo "</b><br>";
      echo $row['MESSAGE'];
      echo "</p>";

    }
  }
  else
  {
      echo "<p>There are no comments!</p>";
  }
?>
