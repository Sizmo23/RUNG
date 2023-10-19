<?php
session_start();
    // if(isset($_FILES['image'])) {

        
    //     // Include the database connection
    //     include 'conn.php';
    //     // Get the image data
    //     $image_name = $_FILES['image']['name'];
    //     $image_temp = $_FILES['image']['tmp_name'];
    //     $image_size = $_FILES['image']['size'];
      
    //     // Get the artist ID
    //     $aid = 1; // Replace with your code to get the artist ID
      
    //     // Generate a unique filename
    //     $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
    //     $image = uniqid() . '.' . $image_ext;
      
    //     // Define the upload directory
    //     $upload_dir = 'uploads/';
      
    //     // Define the upload path
    //     $upload_path = $upload_dir . $image;
      
    //     // Check if the file size is less than 5 MB
    //     if($image_size < 5242880) 
    //     {
      
    //       // Upload the image to the server
    //         if(move_uploaded_file($image_temp, "upload-images/". $image_name)) 
    //         {
    //             // Insert the image data into the database
    //             $sql = "INSERT INTO image (image, location, Aid) VALUES ('$image', '$upload_path', '$aid')";
    //             if(mysqli_query($conn, $sql)) 
    //             {
    //                 echo "<script> alert('JBjbjbad'); </script>";
    //             } 
    //             else 
    //             {
    //                 echo "<script> alert('" . mysqli_error($conn) . "'); </script>";
    //             }
    //         } 
    //         else 
    //         {
    //             $error = error_get_last();
    //             echo "<script>alert('Upload error: " . $error['message'] . "')</script>";
    //         }
    //     } 
    //     else 
    //     {
    //         echo "<script> alert('5 mb'); </script>";
    //     }
    //   }
    
// ?>
<html>
    <head>
        <title> Artist log in </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="comeon.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="shortcut icon" type="images" href="images/logo.jpg">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <!-- <link rel="stylesheet" href="style.css"> -->

        <script src="https://kit.fontawesome.com/4c6b92ff6f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <style>
     .form-group{
        width:300px;
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
                    <a class="navbar-brand fs-1" href="index.html" style="font-weight: bold; font-family: arial; color:white;">RAANG</a>
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
            
        <br>
        <div class="container-fluid profile-container">
            <div class="profile-image">
        </div>
            <div class="profile-details d-flex justify-content-end">
                <?php
                    include 'AObtain.php';
                    echo '<h1>' . $Name1 . '</h1>';
                ?>
              
              <div class="dropdown ms-auto">
                <button class="btn btn-secondary dropdown-toggle ms-auto" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-ellipsis-h" style="font-size: 30px;"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Modify profile picture</a></li>
                    <li><a class="dropdown-item" href="#">Modify cover picture</a></li>
                    <li><a class="dropdown-item" href="Artup.php">Upload artwork</a></li>
                </ul>
                </div>
            </div>
          </div>
          <div class="gallery-container">

            <div class="gallery"></div>
          </div>
            <?php
                include 'viewtable.php';
            ?>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

<!-- <div class="col-md-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" id="image1" name="image" class="form-control"/>
                        </div>
                        <br>
                        <center> <input type="submit" name='submit' value="UPLOAD"></center>
                    </form>
                </div> -->