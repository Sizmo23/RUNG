<?php
  // Start a new session
  session_start();
  include 'conn.php';
  if(isset($_POST['submit'])) 
  {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database for the user with the given email
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful and if the user exists
    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Save the user's first name into a session variable
            $_SESSION['firstName'] = $user['fname'];

            // Redirect to the home page
            header('Location: index.php');
            exit();
        }
    }

    // If the email or password is incorrect, show an error message
    $errorMsg = "Invalid email or password";
}
 
?>


<html>
    <head>
        <title> Artist log in </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <style>
        .divider:after,
        .divider:before 
        {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .link{
            color: #ec5d86;
        }
        .h-custom 
        {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) 
        {
            .h-custom {
            height: 100%;
        }
        }
        body{
            color: whitesmoke;
            background-image: url(user.jpg);
            background-position:center;
            background-size: cover;
            
        }
        .card{
            background-color: #251f69;
        }
        h1{
            color: #ec5d86;
        }
        .btn{
            background-color: #ec5d86;
            color: whitesmoke;
        }


        .navbar{
        color:rgb(235, 60, 168);
    }


	#admin
	{
		color: whitesmoke;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	#dropdowncontent1 
	{
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 130px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	#dropdowncontent1 a 
	{
		color: whitesmoke;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	#dropdown1:hover #dropdowncontent1
	{
		display: block;
	}

	#admin:hover
	{
		background-color: lightseagreen;
	}

	/* dropdowm content1 ends*/

	/*dropdown content2 starts*/

	#doctor
	{
		color: whitesmoke;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	#dropdowncontent2
	{
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 130px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	#dropdowncontent2 a 
	{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	#dropdown2:hover #dropdowncontent2
	{
		display: block;
	}

	#doctor:hover
	{
		background-color: lightseagreen;
	}

	/*dropdown content2 ends*/

	/*dropdown content3 starts*/

	#patient
	{
		color: whitesmoke;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	#dropdowncontent3 
	{
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 130px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	#dropdowncontent3 a 
	{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	#dropdown3:hover #dropdowncontent3
	{
		display: block;
	}

	#patient:hover
	{
		background-color: lightseagreen;
	}



    </style>

    <body>  
    <div class="container-fluid" style="background-color: rgb(235, 60, 168)">
			
			<nav class="navbar navbar-expand-lg navbar-light " >
	  			<div class="container-fluid" style="background-color: rgb(235, 60, 168)">
	    			<a class="navbar-brand fs-1" href="#" style="font-weight: bold; font-family: arial; color:white;">RAANG</a>
	    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      				<span class="navbar-toggler-icon"></span>
	    			</button>

	    			<div class="collapse navbar-collapse" id="navbarNavDropdown">
	      				<ul class="navbar-nav ms-auto">

					        <li id="dropdown1" class="nav-item">
					          <a id="admin" class="nav-link active mx-3 fs-5" aria-current="page" href="index.html">Home</a>
					        </li>

					        <li id="dropdown2" class="nav-item">
					          <a id="doctor" class="nav-link mx-3 fs-5" aria-current="page" href="#">Artist</a>
					          <div id="dropdowncontent2">
							  	<a href=" http://localhost\RAANG\ArtistSignup.php">Sign up</a>
					          	<a href=" http://localhost\RAANG\ArtistLogin.php">Login</a>
					          </div>
					        </li>

					       	<li id="dropdown3" class="nav-item">
					          <a id="patient" class="nav-link mx-3 fs-5" aria-current="page" href="#" style="margin-right: 50px;">User</a>
					          <div id="dropdowncontent3">
					          	<a href=" http://localhost\RAANG\userlog.php">Login</a>
					          	<a href=" http://localhost\RAANG\usersignup.php">Sign up</a>
					          </div>
					        </li>

	      				</ul>
	    			</div>
	  			</div>
			</nav>

		</div>
        

        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-lg-7 col-xl-5">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <center><b><h1 class="mb-4 pb-2 pb-md-0 mb-md-5">Log In</h1></b></center>
                      <form action='http://localhost/RAANG/userval.php' method='POST'>
                            <div class="row">
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                                <center>
                                    <div class="col-md-10">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name='email' class="form-control form-control-lg"
                                            placeholder="Enter a valid email address" />
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <br>
                            <div class="row">
                                <center>
                                    <div class="col-md-10">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name='password' class="form-control form-control-lg"
                                                placeholder="Enter your password" />
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <center><input id="submit" type="submit" name="submit" value="Log In" class="btn btn-primary"></center>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
      
</html>