<html>
    <head>
        <title> Artist Signup </title>
        <link rel="stylesheet" href="comeon.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <style>
        body{
            color: whitesmoke;
            background-image: url('https://images.pling.com/img/00/00/61/96/86/1576747/0cf48dfd051a37abf24e7201229c838306f249e9da95a69c7a7865da156d17f232c2.jpg');
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
    <header>

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

    </header>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <center><h1 class="mb-4 pb-2 pb-md-0 mb-md-5">Sign Up</h1></center>
                      <form action="ArtistProfile.php">
          
                        <div class="row">
                          <div class="col-md-6 mb-4">
          
                            <div class="form-outline">
                              <input type="text" id="firstName" class="form-control form-control-lg" required/>
                              <label class="form-label" for="firstName">First Name</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4">
          
                            <div class="form-outline">
                              <input type="text" id="lastName" class="form-control form-control-lg" required/>
                              <label class="form-label" for="lastName">Last Name</label>
                            </div>
          
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4 d-flex align-items-center">
          
                            <div class="form-outline datepicker w-100">
                              <input type="text" class="form-control form-control-lg" id="Address" required/>
                              <label for="Address" class="form-label">Address</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4">
          
                            <h6 class="mb-2 pb-1">Gender: </h6>
          
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="fem" id="femaleGender"
                                value="Female" checked />
                              <label class="form-check-label" for="femaleGender">Female</label>
                            </div>
          
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="male" id="maleGender"
                                value="Male" />
                              <label class="form-check-label" for="maleGender">Male</label>
                            </div>
          
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
          
                            <div class="form-outline">
                              <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                              <label class="form-label" for="email">Email</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
          
                            <div class="form-outline">
                              <input type="tel" id="phone" class="form-control form-control-lg" required/>
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>
          
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <input type="password" id="password" class="form-control form-control-lg" required/>
                                <label class="form-label" for="password">Password</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <input type="password" id="password1" class="form-control form-control-lg" required/>
                                <label class="form-label" for="password1">Confirm Password</label>
                            </div>
                          </div>
                        </div>
          
                        <div class="mt-4 pt-2">
                          <center><input class="btn btn-lg" type="submit" value="Sign Up" /></center>
                        </div>
          
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>

    <script>
        // Get the form element
        const form = document.querySelector('form');
      
        // Add a submit event listener to the form
        form.addEventListener('submit', (event) => {
          // Prevent the form from submitting
          event.preventDefault();
      
          // Get the input values
          const firstName = document.getElementById('firstName').value;
          const lastName = document.getElementById('lastName').value;
          const address = document.getElementById('Address').value;
          const email = document.getElementById('email').value;
          const phone = document.getElementById('phone').value;
          const password = document.getElementById('password').value;
          const password1 = document.getElementById('password1').value;
      
          // Regular expression to validate names
          const nameRegex = /^[a-zA-Z\s]*$/;
          const phoneRegex = /^[0-9]*$/;
      
          // Check if the first name contains special characters or numbers
          if (!nameRegex.test(firstName)) {
            alert('First name should contain only letters and spaces.');
            return;
          }
      
          // Check if the last name contains special characters or numbers
          if (!nameRegex.test(lastName)) {
            alert('Last name should contain only letters and spaces.');
            return;
          }
          
          if (!phoneRegex.test(phone)) 
          {
            alert('Phone number should contain only numbers.');
            return;
          }

          // Check if the password is more than 8 characters long
          if (password.length < 8) {
            alert('Password should be at least 8 characters long.');
            return;
          }
      
          // Check if the passwords match
          if (password !== password1) {
            alert('Passwords do not match.');
            return;
          }
      
          // Submit the form
          form.submit();
        });
      </script>
      
</html>