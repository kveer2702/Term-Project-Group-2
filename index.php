<?php include 'includes/header.php'; ?>


<div class="hero">
    <div class="hero-content">
        <h1>Welcome to My Portfolio</h1>
        <p>Explore my work and get in touch if you have any questions or projects in mind.</p>
        <a href="register.php" class="btn btn-primary mb-3">Register</a> 
        <a href="login.php" class="btn btn-secondary mb-3">Login</a> 
        <a href="messages.php" class="btn btn-info mb-3">Contact Us</a> 
      

    </div>
</div>



<?php include 'includes/footer.php'; ?>


<style>
  
    .hero {
        position: relative;
        background-image: url('images/background.png'); 
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        padding: 0 20px;
    }

   
    .hero:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); 
    }

    
    .hero-content {
        position: relative;
        z-index: 10;
        max-width: 900px;
        margin: 0 auto;
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .hero p {
        font-size: 1.2rem;
        opacity: 0.8;
        margin-bottom: 20px;
    }

   
    .hero .btn {
        margin-top: 20px;
        background-color: #008080;
        color: white;
        padding: 14px 28px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: bold;
        text-decoration: none;
        transition: 0.3s;
    }

   
    .hero .btn:hover {
        background-color: #f7d794;
        color: #333;
    }

   
    .container.mt-5 {
        padding-top: 50px; 
    }

   
    footer {
        background: #333;
        color: white;
        text-align: center;
        padding: 20px;
        font-size: 1rem;
        margin-top: auto;
        position: relative;
        width: 100%;
    }
</style>
