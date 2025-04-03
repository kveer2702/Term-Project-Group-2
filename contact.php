<?php include 'includes/header.php'; ?>

<div class="container contact-container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="contact-card p-4">
                <h2 class="text-center mb-3">Get in Touch</h2>
                <p class="text-center">Feel free to reach out to us for any inquiries or collaborations.</p>

                <form action="messages.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
