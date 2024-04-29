<?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            include('connection.php');
            // Handle registration logic using SQL here
            $username = $_POST['username'];
            $pass = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            // Check if passwords match
            if ($pass != $confirm_password) {
                echo "<p>Passwords do not match.</p>";
            } else {
                // Example SQL query for registration (replace with your actual SQL code)
          
                $query = "INSERT INTO users VALUES ('$username', '$pass', '$confirm_password')";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    // Registration successful
                    echo "<p> Registration successfull.</p>";
                    header(("Location: login.php"));
                } else {
                    // Registration failed
                    echo "<p>Registration failed. Username may already be taken.</p>";
                }
            
            
        }
    }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet">

</head>
<style>
.gradient-custom-2 {
/* fallback for old browsers */ 
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}
.gradient-custom-2 {
   
    background-size: cover;
    background-position: center;
    width:50%;
    height:auto;
}

 {
.gradient-form {
height: 100vh !important;
}
}
{
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="logo.png"
                                            style="width: 150px;" alt="logo">
                                        <h1 class="mt-1 mb-5 pb-1">InfoBeats</h1>
                                    </div>

									<form method="post" action="signup.php">

                                      <div class="input-group">
	                                    <h2>Signup </h2>
                                            </div>


                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="form2Example11" class="form-control"
                                                placeholder="UserName " name="username" />
                                            <label class="form-label" for="form2Example11">Username</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" name ="password"/>
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>
                                       
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" name ="confirm_password" />
                                            <label class="form-label" for="form2Example22">Confirm password</label>
                                        </div>

                                        
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit"  name="submit">Submit</button>
                                                
                                                <h4>
				                     <a href="login.php">Login Here</a>
			                        </h4> 
                                    </form>
									
                                </div>
                             </div>
                             <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <img src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_640.jpg" alt="News Image" style="width:100%">
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</div>
</body>

</html>
