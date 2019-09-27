<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: index.php?err=2');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $_SESSION['sess_username'];?> Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-dark" href="#"><?php echo $_SESSION['sess_username'];?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">WHO</a></li>
                    <li><a href="#">WHAT</a></li>
                    <li><a href="#">WHERE</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Who Am I?</h3>
        <img src="https://images.unsplash.com/photo-1459356979461-dae1b8dcb702?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>I'm an adventurer</h3>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">What Am I?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Where To Find Me?</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <p>Click on the Images to Redirect to Facebook Profile</p>
                <a href="https://www.facebook.com/shivendrasingh.pawar" target="_blank">
                    <img src="https://images.unsplash.com/photo-1543185377-b75671ac8741?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="ihttps://images.unsplash.com/photo-1558981420-87aa9dad1c89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80mg-responsive margin" style="width:100%" alt="Image" title="Click on the Image for Facebook Profile">
                </a>
            </div>
            <div class="col-sm-4">
                <p>Click on the Images to Redirect to LinkedIn Profile</p>
                <a href="https://www.linkedin.com/in/shivendrasinghpawar" target="_blank">
                    <img src="https://cdn.pixabay.com/photo/2015/03/26/04/26/foosball-689763__340.jpg" class="img-responsive margin" style="width:100%" alt="Image" title="Click on the Image for Linked In Profile">
                </a>
            </div>
            <div class="col-sm-4">
                <p>Click on the Images to Redirect to Personal Profile</p>
                <a href="https://shivendrapawarresume.000webhostapp.com/" target="_blank">
                    <img src="https://image.shutterstock.com/image-photo/closeup-resume-260nw-272513510.jpg" class="img-responsive margin" style="width:100%" alt="Image" title="Click on the Image to redirect to the personal homepaege">
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p>Thanks : <?php echo $_SESSION['sess_username'];?></p>
        <p class="text-light text-light"><a href="https://shivendrapawarresume.000webhostapp.com/">Shivendra Singh Pawar</a></p>
    </footer>

</body>

</html>