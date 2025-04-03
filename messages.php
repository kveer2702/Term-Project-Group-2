<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h2>Contact Us</h2>
    <p>If you have any questions or messages for us, feel free to send them using the form below:</p>

   
    <form action="messages.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <hr>

   
    <h3>Previous Messages</h3>
    <?php
    include 'db.php';

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

      
        $query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $query)) {
            echo "<div class='alert alert-success mt-3'>Message sent successfully!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Error sending message. Please try again later.</div>";
        }
    }

  
    $query = "SELECT * FROM messages ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='message-card mb-3 p-3 border rounded'>";
            echo "<h5>" . htmlspecialchars($row['name']) . " <small><em>(" . $row['created_at'] . ")</em></small></h5>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
            echo "<p><strong>Message:</strong> " . nl2br(htmlspecialchars($row['message'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No messages yet.</p>";
    }

    mysqli_close($conn);
    ?>

</div>

<?php include 'includes/footer.php'; ?>
