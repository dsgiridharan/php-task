<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './shared/link.php';
?>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
            <h2 class="text-center pb-4 text-muted">Registration</h2>
                <div class="col-md-4">
                    <form method="post">
                    <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" class="form-control" name="username" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="pass" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" id="pass" required>
                        </div>
                        <button type="submit" name="submit" class="my-3 btn btn-primary w-100">Submit</button>
                        <p class="text-center">You have account? <a class="text-decoration-none" href="index.php">Login here</a></p>
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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $phone = validate($_POST['phone']);

    $sql = "SELECT * FROM register WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "<script>alert('User already exists');location.replace('register.php')</script>";
    } else {
        $query = "INSERT INTO register (username, password, email,phone) VALUES ('$username', '$password', '$email','$phone')";
        $result = mysqli_query($conn, $query);
        echo "<script>alert('Register successfully');location.replace('index.php')</script>";
    }
}
?>

       <?php include './shared/script.php';?>
</body>
</html>