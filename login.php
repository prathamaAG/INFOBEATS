<?php
session_start();
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    // Modified SQL query to use the correct column name
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['users'] = $uname;
        header("location: infobeats.php");
        exit; // Important: Stop further execution after redirection
    } else {
        echo "Invalid username or password";
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
	background-color:white;	
}
@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<body>
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-6">
                    <div class="card rounded-3 text-black">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <img src="logo.png" style="width: 150px;" alt="logo">
                                <h1 class="mt-1 mb-5 pb-1">InfoBeats</h1>
                            </div>
                            <form action="" method="post">
                                <div class="login-box">
                                    <h1>Login</h1>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="username" name="username" class="form-control"
                                            placeholder="Username" />
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Password" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Login</button>    
                                    </div>
                                    <h4>New User..?
                                        <a href="Signup.php">Register Here!</a>
                                    </h4>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">Beats other Information</h4>
                        <p class="small mb-0">
                            An API-based website leverages APIs (Application Programming Interfaces) to integrate
                            external services or data, enhancing functionality and content. This approach enables
                            dynamic and interactive user experiences, with real-time updates and personalized content,
                            improving overall user engagement and satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
