<html>
    <head>
        <title> Sign In </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
		body {
			background-color: grey;
		}

		.login-form {
			margin-top: 100px;
		}

		.login-form form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
		}

		.login-form h2 {
			text-align: center;
			font-size: 24px;
			margin-bottom: 20px;
		}

		.form-control:focus {
			border-color: #007bff;
			box-shadow: none;
		}

		.login-form .btn {
			background-color: #007bff;
			border-color: #007bff;
			width: 100%;
			padding: 10px;
			font-size: 16px;
			font-weight: bold;
			margin-top: 20px;
		}

		.login-form .btn:hover, .login-form .btn:focus {
			background-color: #0069d9 !important;
			border-color: #0062cc !important;
			box-shadow: none;
		}

		.login-form a {
			color: #007bff;
			font-size: 14px;
			text-decoration: none;
		}

		.login-form a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="home.html">Medical System</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Assignment 2/Register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SignIn.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.html">Information</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-form">
                <form id="myForm" method="post">
                    <h2>Main System Login</h2>
                    <?php if (isset($_GET['error'])) { ?>

                    <p class="error"><?php echo $_GET['error']; ?></p>

                    <?php } ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Select your role:</label>
                        <select class="form-control" id="role" name="role">
                            <option value="patient">Patient</option>
                            <option value="doctor">Doctor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <input id="submit" type="submit" value="Log In" class="btn btn-primary" onclick="return loginUser()">
                    <!-- <button name="submit" type="submit" class="btn btn-primary">Login</button> -->
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    function loginUser()
    {
        const myForm = document.getElementById('myForm');
        const input1 = document.getElementById('role');
        const inputValue = input1.value;
        if (inputValue === 'patient') {
        myForm.action = 'http://localhost/Assignment 2/patientlog.php';
        } else if (inputValue === 'doctor') {
        myForm.action = 'http://localhost/Assignment 2/doclog.php';
        } else {
        myForm.action = 'http://localhost/Assignment 2/adminlog.php';
        }
        myForm.submit();
    };
</script>
</html>