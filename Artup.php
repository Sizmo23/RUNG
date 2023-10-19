<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        // Form has been submitted
    

        // Include the database connection
        include 'conn.php';
        echo "<script> alert('XYZ!'); </script>";

    
        // Get the image data
        $Name = $_POST['name'];
        $price = $_POST['price'];
        $image_name = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
    
        // Get the artist ID
        $aid = 2; // Replace with your code to get the artist ID
    
        // Generate a unique filename
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $image = uniqid() . '.' . $image_ext;
    
        // Define the upload directory
        $upload_dir = 'upload/';
    
        // Define the upload path
        $upload_path = $upload_dir . $image;
    
        // Check if the file size is less than 5 MB
        if($image_size < 5242880) 
        {
    
            // Upload the image to the server
            if(move_uploaded_file($image_temp, $upload_path)) 
            {
    
                // Insert the image data into the database
                $sql = "INSERT INTO image (Name, Price, image, location, Aid) VALUES ('$Name','$price','$image', '$upload_path', '$aid')";
                if(mysqli_query($conn, $sql)) {
                    echo "<script> alert('Image uploaded successfully!'); </script>";
                    header("Location:http://localhost/RAANG/ArtistProfile.php");
                } else {
                    echo "<script> alert('" . mysqli_error($conn) . "'); </script>";
                }
    
            } 
            else 
            {
                $error = error_get_last();
                echo "<script>alert('Upload error: " . $error['message'] . "')</script>";
            }
    
        } else {
            echo "<script> alert('File size should be less than 5 MB!'); </script>";
        }
    }
?>

<html>
    <head>
        <title> Artist log in </title>
        <link rel="stylesheet" href="comeon.css">
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
            margin: 0;
            padding: 0;
            background-image: url('https://cenacolovinciano.org/wp-content/uploads/2019/05/Museo-Cenacolo-Vinciano-Copie-e-Derivazione-della-Cena-Andre-Dutertre-Ultima-Cena-1794.jpg');
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
                      <center><b><h1 class="mb-4 pb-2 pb-md-0 mb-md-5">Upload Artwork to your Page</h1></b></center>
                      <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-outline mx-4">
                                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Name" />
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-outline mx-4">
                                    <input type="text" id="price" name="price" class="form-control form-control-lg" placeholder="Price" />
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <center>
                                <div class="col-md-10">
                                    <div class="form-group m-4">
                                    <input type="file" id="image" name="image" class="form-control"/>
                                    </div>
                                </div>
                                </center>
                            </div>
                            <div class="text-center text-lg-start pt-2">
                                <center>
                                <input type="submit" name="submit" value='Upload' style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                </center>
                            </div>
                            </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
    <!-- <script>
        // Get the form element
        const form = document.querySelector('form');
      
        // Add a submit event listener to the form
        form.addEventListener('submit', (event) => {
          // Prevent the form from submitting
          event.preventDefault();
      
          // Get the input values
          
          const price = document.getElementById('price').value;
      
          const phoneRegex = /^[0-9]*$/;
      
          if (!phoneRegex.test(price)) 
          {
            alert('Phone number should contain only numbers.');
            return;
          }
      
          // Submit the form
          form.submit();
        });
      </script> -->
      
</html>