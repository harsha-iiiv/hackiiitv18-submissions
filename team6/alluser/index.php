<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="header">
 </div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    0<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">How it works</a>
  <a href="#">Contact</a>
</div>


<div class="navbar navbar-default" id="main">

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Helpinghands.com</span>
</div>
    
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

    


  
<div class="container banner_image banner">
    <img src="bg.jpg" alt="Snow" style="width:100%">

            <div class="row row_space">
               

                                    <div class="col-md-3 col-sm-6">
                                       <div class="panel panel-primary">
                                           <div class="panel-heading"><center>FOOD</center></div>
                                           <div class="thumbnail">


                                        <a href="#"><img src="img/2.jpg" ></a>

                                           <center>

                                            <br>
                                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input name="category_checkbox" id="category_checkbox" type="checkbox" aria-label="checkbox">
                          <label for="category_checkbox" class="[ btn btn-default active ]">
                                        Donate Food
                                    </label>
                        </div>
                      </div>

                    </div>
                              </center>

                                        </div> 

                                    </div>
                                    </div>
                                    
                                    
                                    
                                                                        <div class="col-md-3 col-sm-6">
                                       <div class="panel panel-primary">
                                           <div class="panel-heading"><center>CLOTHES</center></div>
                                           <div class="thumbnail">


                                        <a href="#"><img src="img/4.jpg" ></a>

                                           <center>

                                            <br>
                                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input name="category_checkbox_clothes" id="category_checkbox_clothes" type="checkbox" aria-label="checkbox">
                          <label for="category_checkbox_clothes" class="[ btn btn-default active ]">
                                        Donate Clothes
                                    </label>
                        </div>
                      </div>

                    </div>
                              </center>

                                        </div> 

                                    </div>
                                    </div>
                                    
                                    
                                                                        <div class="col-md-3 col-sm-6">
                                       <div class="panel panel-primary">
                                           <div class="panel-heading"><center>UTENSILS</center></div>
                                           <div class="thumbnail">


                                        <a href="#"><img src="img/5.jpeg" ></a>

                                           <center>

                                            <br>
                                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input name="category_checkbox_utensils" id="category_checkbox_utensils" type="checkbox" aria-label="checkbox">
                          <label for="category_checkbox_utensils" class="[ btn btn-default active ]">
                                       
                                        Donate Utensils
                                    </label>
                        </div>
                      </div>

                    </div>
                              </center>

                                        </div> 

                                    </div>
                                    </div>
                                    

                                    
                                                                        <div class="col-md-3 col-sm-6">
                                       <div class="panel panel-primary">
                                           <div class="panel-heading"><center>BOOKS</center></div>
                                           <div class="thumbnail">


                                        <a href="#"><img src="img/6.jpeg" ></a>

                                           <center>

                                            <br>
                                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input name="category_checkbox_books" id="category_checkbox_books" type="checkbox" aria-label="checkbox">
                          <label for="category_checkbox_books" class="[ btn btn-default active ]">
                                        Donate Books
                                    </label>
                        </div>
                      </div>

                    </div>
                              </center>

                                        </div> 

                                    </div>
                                    </div>
                                    
                                    
                                    

                <center><a href="uc.html" class="btn btn-info">Proceed for Donation</a></center>        
                        
                </div>
                

            

</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
    <?php endif ?>
</div>
		
</body>
</html>