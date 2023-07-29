<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forum</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <style>
      /* carousel css */
*{
  padding:0;
  margin:0;
  box.sizing:border-box;
}
main{
  width:100%;
  height:500px;
  margin:auto;
  position: relative;

}
.slide{
  width:100%;
  height:100%;
  position: absolute;
  z-index: -1;
}
    /* css for card */

.card {
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid #172984;
  border-radius: 4px;
  padding: 16px;
  max-width: 300px;
  margin: 20px 20px 20px 20px ;
  float: left;
}

.card-image {
  width: 100%;
  height: auto;
  margin-bottom: 16px;
}

.card-title {
  font-size: 20px;
  margin-bottom: 8px;
}

.card-description {
  margin-bottom: 16px;
}

.card-button {
  display: inline-block;
  padding: 8px 16px;
  background-color: #071a7a;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}


</style>
</head>

<body>
   

<?php
// connect to out database
$servername = "localhost";
$username = "root";
$password = "";
$database = "discuss";

$conn = mysqli_connect($servername, $username, $password, $database);
?>
    
    
    <?php include 'navbar.php' ?>
    <?php include 'carousel.php' ?>
    <div class="container">
        <h1>Welcome to our community forum</h1>
       <?php
         $sql = "SELECT * FROM `categories`";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($result)){

          $sno = $row['sno'];
          $cat = $row['Name'];
          $desc = $row['description'];

            echo ' <div class="card">
            <img src="https://source.unsplash.com/random/400*400/?'. $cat .',coding" alt="Image" class="card-image">
            <div class="card-content">
              <h2 class="card-title">'. $cat .'</h2>
              <p class="card-description">'. substr($desc, 0,20) . ' ...</p>
              <a href="read.php" class="card-button">Read More</a>
            </div>
          </div>';

         }
       ?>
      
 

       
</body>


</html>