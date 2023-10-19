<?php
	session_start();
	echo "<script> alert('CHAL JA BC') </script>";

	if (isset($_POST['artwork']) && $_POST['price'])
	{
		
		echo "<script> alert('CHAL GAYAAAA') </script>";
		$artwork = $_POST['artwork'];
		$price = $_POST['price'];

		
		if (!isset($_SESSION['cart'])) 
		{
			$_SESSION['cart'] = array();
		}

		if (!isset($_SESSION['cart'][$artwork])) 
		{
			$_SESSION['cart'][$artwork] = array('price' => $price, 'quantity' => 1);
		} else 
		{
	
			$_SESSION['cart'][$artwork]['quantity']++;
		}

		
		$cart_count = array_sum(array_column($_SESSION['cart'], 'quantity'));
	} 
	else 
	{
		
		$cart_count = 0;
	}
?>

<html>
    <head>
        <title> Artist log in </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="comeon.css">
     
        <link rel="shortcut icon" type="images" href="images/logo.jpg">

    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      

        <script src="https://kit.fontawesome.com/4c6b92ff6f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <style>
       
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

	/*dropdown content3 ends*/


        .container-fluid
        {
            background-color: #130f40; 
            border: none;
        }
        h1{
            color:whitesmoke;
        }
     /* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.form-group{
    width:50%;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}


.with-button {
  display: flex;
  justify-content: space-between;
  padding-right: 20px;
}

    </style>

    <body>
    <section id="header">
		
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
        <br>
        <br>
        <div class="container-fluid d-flex justify-content-between align-items-center">
			<div>
				<?php
				include 'obtain.php';
				echo '<h1> Welcome ' . $Name1 . '!</h1>';
				?>
			</div>
			<div class="mx-4 ml-auto">
				<a href="cart.php"><i class="fa fa-shopping-cart fa-lg"></i> <span class="badge badge-pill badge-success"><?php echo $cart_count; ?></span></a>
			</div>
			</div>
		<div class="form-group m-3">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<select class="form-control" id="artist-name" name="artist-name">
					<option value="" disabled selected hidden>Search For Your Favourite Artist</option>
					<?php
						$query = "SELECT DISTINCT Fname, Lname FROM artist";
						$result = mysqli_query($conn, $query);
						while ($row = mysqli_fetch_assoc($result)) {
						echo '<option value="' . $row['Fname'] . ' ' . $row['Lname'] . '">' . $row['Fname'] . ' ' . $row['Lname'] . '</option>';
						}
						mysqli_close($conn);
					?>
				</select>
				<br>
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</div>



<br>
<br>

<div class="container-fluid">
<?php
  
  include 'conn.php';

  
  if (isset($_POST['artist-name'])) {
    $artist_name = $_POST['artist-name'];

   
    $artist_name_parts = explode(" ", $artist_name);
    $artist_fname = $artist_name_parts[0];
    $artist_lname = $artist_name_parts[1];

   
    $sql = "SELECT * FROM image JOIN artist ON image.AID = artist.id WHERE artist.Fname='$artist_fname' AND artist.Lname='$artist_lname'";
  } else {
  
    $sql = "SELECT * FROM image";
  }

  
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
  
    echo '<div class="row">';


	while ($row = mysqli_fetch_assoc($result)) {
		$image_path = $row['location'];
		$image_name = $row['image'];
		$artwork = $row['Name'];
		$price = $row['Price'];
	
		echo '<div class="col-md-4">';
		echo '<div class="card mb-4">';
		echo '<img src="'.$image_path.'" class="card-img-top" style="height: 350px; object-fit: cover;">';
		echo '<div class="card-body">';
		echo '<h5 class="card-title">'.$artwork.'</h5>';
		echo '<p class="card-text with-button">';
		echo '$'.$price.'<button id="addtocart" class="btn btn-primary add-to-cart" data-artwork="' . $row['Name'] . '" data-price="' . $row['Price'] . '">Add to Cart</button>';

		echo '</p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	  }
	
	  
	  echo '</div>';
	} else {
	  echo 'No images found.';
	}

	
?>

</div>



    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
	$(document).ready(function(){

		$('.add-to-cart').click(function(){
			
			$(this).prop('disabled', true);

			
			var artwork = $(this).data('artwork');
			var price = $(this).data('price');

			$.ajax(
				{
					url: "<?php echo $_SERVER["PHP_SELF"]; ?>",
					type: "POST",
					data: { artwork: artwork, price: price },
					success: function(response) 
					{
						$('.badge').text(response);
					},
					// error: function(xhr, status, error) 
					// {
					// 	script("An error occurred: " + error);
					// }
				});
		});
	});

</script>
</html>

