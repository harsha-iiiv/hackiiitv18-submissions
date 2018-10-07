<!DOCTYPE html>
<html>
<head>
<title>TQ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    </head>
<body>

<!-- Sidebar -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<div class="navbar navbar-default" id="main">

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Helpinghands</span>
</div>
    
    <script>
function openNav(){
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

    
<div class="container banner_image">
            <div class="row row_space">
              
              
              
              
              
              
              <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>ENTER YOUR DETAILS</h2>
                        <form  action="checkout_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="donor"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            

                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="Contact Number" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group ">
                                <input class="form-control" placeholder="Name" name="city"  required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="textbox" class="form-control"  placeholder="Address" name="addres" required = "true">
                            </div>
                            <center><a href="#"><button type="submit" name="submit" class="btn  btn-success">Checkout</button></a></center>
                        </form>
                    </div>
               

                                   
                                   
                                   
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
     
</body>
</html> 
