<?php
echo '<nav class="navbar background h-nav-resp">

<ul class="nav-list v-class-resp">
  
  <li><a href="/Forum">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li class="dropdown">
  
        <a href="#" class="dropbtn">Categories</a>
        <div class="dropdown-content">
          <a href="#">Action</a>
          
        </div>
      </li>

<li class="contact">
    <a href="contact.php">Contact Us</a>
</li>
  
</ul> 
    <div class="rightNav v-class-resp">
        <form action="">
        <input type="text" name="search" id="search" placeholder="search">
        <button class="btn btn-sm">Search</button>
        <button class="btn1"><a  href="login.php">Log-in</a></button>
        <button class="btn1"><a href="signup.php">Sign-up</a></button>
        </form>
        
 </div>
 

</nav>';

?>