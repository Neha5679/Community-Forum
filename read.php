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
        body{
            background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }
         .cont1{
            float: left;
        }

        fieldset{
            width:400px;
            height:400px;
            padding:30px;
            display:flex;
            justify-content:center;
            
           margin-left:30px;
        }
        .fom1{
            display:flex;
            justify-content:center;

        }
        .p{
            width:400px;
            height:400px;
        }
        img{
            width:400px;
            height:200px;
            

        }
        .question{
            padding:50px;
            margin:30px;
        }
        .card-description{
            padding:20px;
            
        }
        .fom1{
               padding:20px;
               margin:20px;
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
    <div class="cont1">
        <div class="fom1">
 <fieldset>
    <legend>Python Forum</legend>
    <form  class="p">
    <div class="card">
    <img src="https://source.unsplash.com/random/500*400/?coding,python" alt="Image" class="card-image">
    <div class="card-content">
      <h2 class="card-title">Python Forum</h2>
      <p class="card-description">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation via the off-side rule. Python is dynamically typed and garbage-collected</p>
    <label for="question" >Write your question:</label>
    <input type="text" name="question" id="question">
    </form>
 </fieldset>
 </div>
 <div class="fom1">
 <fieldset>
    <legend>Html Forum</legend>
    <form  class="p">
    <div class="card">
    <img src="https://source.unsplash.com/random/500*400/?coding,python" alt="Image" class="card-image">
    <div class="card-content">
      <h2 class="card-title">Html Forum</h2>
      <p class="card-description">The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It defines the meaning and structure of web content. It is often assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript</p>
    <label for="question" >Write your question:</label>
    <input type="text" name="question" id="question">
    </form>
 </fieldset>

 <fieldset>
    <legend>C++ Forum</legend>
    <form  class="p">
    <div class="card">
    <img src="https://source.unsplash.com/random/500*400/?coding,python" alt="Image" class="card-image">
    <div class="card-content">
      <h2 class="card-title">C++</h2>
      <p class="card-description">C++ is a general purpose, case-sensitive, free-form programming language that supports object-oriented, procedural and generic programming.</p>
    <label for="question" >Write your question:</label>
    <input type="text" name="question" id="question">
    </form>
 </fieldset>
 </div>
 </div>
</body>


</html>