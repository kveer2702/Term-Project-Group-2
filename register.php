<?php

include 'db.php';
include 'includes/header.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    if ($password !== $confirm_password) {
        echo "<p>Passwords do not match!</p>";
    } else {
     
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      
        $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<p>Registration successful. <a href='login.php'>Login now</a></p>";
        } else {
            echo "<p>Error registering user. Please try again.</p>";
        }
    }
}
?>

<body class="page-register">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Sign Up</h2>

           
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Sign Up</button>
            </form>

            <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
