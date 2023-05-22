<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php
include './shared/link.php';?>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h3 class="text-center text-capitalize mb-4">Hello, <?php echo $_SESSION['username']; ?></h3>
                        <a href="logout.php" class="btn btn-danger w-100">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>