<?php
session_start();


if (!isset($_SESSION["username"])) { 
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #008080;
            padding: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: #f7d794;
            transform: scale(1.1);
        }

        .container {
            padding: 60px 20px;
            text-align: center;
            flex-grow: 1;
        }

        h2 {
            font-size: 32px;
            color: #343a40;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #f7d794;
            color: #333;
        }

        footer {
            background-color: #008080;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 1rem;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
            margin-top: auto;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #FFBE76;
        }

        @media (max-width: 768px) {
            nav ul li {
                display: block;
                margin-bottom: 10px;
            }

            .container {
                padding: 50px 20px;
            }

            footer {
                padding: 15px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>You're successfully logged in. Explore your portfolio:</p>
        <div>
            <a href="projects.php" class="btn-primary">View Projects</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
