<?php
session_start(); 

include 'db.php';
include 'includes/header.php';  


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    
    if ($user && password_verify($password, $user['password'])) {
       
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

       
        header("Location: dashboard.php"); 
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="page-login">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Login</h2>

           
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php } ?>

           
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <p class="text-center mt-3">Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
