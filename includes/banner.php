 <?php if(isset($_SESSION['user']['username'])){?>
   <div class="logged_in_info">
     <span>Welcome <?php echo $_SESSION['user']['username']?></span>
     |
     <span><a href="logout.php">Logout</a></span>
   </div>
 <?php }else{?>
   <div class="banner">
     <div class="welcome_msg">
       <h1>Today's Inspiration</h1>
			 <p>
			    Do or Do Not <br>
			    There is no try. <br>
			 <span>~ Yoda (Episode 5 - The Empire Strikes Back)</span>
			 </p>
			 <a href="register.php" class="btn">Join us!</a>
		 </div>
     <div class="login_div">
       <form action="<?php echo BASE_URL . 'index.php';?>" method="post">
         <h2>Login</h2>
         <div style="width: 60%; margin: 0px auto;">
           <?php include(ROOT_PATH . '/includes/errors.php')?>
         </div>
         <input type="text" name="username" value="<?php echo $username;?>" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <button class="btn" type="submit" name="login_btn">Sign In</button>
       </form>
     </div>
   </div>
 <?php } ?>
