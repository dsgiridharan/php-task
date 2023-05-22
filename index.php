<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './shared/link.php';?>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center pb-4 text-muted">Login</h2>
                <div class="col-md-4">
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" name="username" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pass" required>
                        </div>
                        <button type="submit" name="submit" class="my-3 btn btn-primary w-100">Submit</button>
                        <p class="text-center">Don't have Account? <a class="text-decoration-none" href="register.php">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
session_start();
include './shared/script.php';
include 'dbconnect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
        exit();
    } else {
        echo "<script>alert('Incorect Username or password')</script>";
        exit();
    }
}
?>
        <?php include './shared/script.php';?>
</body>
</html>