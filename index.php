<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizard2 Digital Marketing</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php
// PHP variables to dynamically render text or content if needed
$page_title = "Navigating the digital landscape for success";
$hero_subtitle = "Our digital marketing agency helps businesses grow and succeed online through a range of services including SEO, PPC, social media marketing, and content creation.";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Here, you might add code to send an email or save data to a database
    $confirmation_message = "Thank you, $name! We have received your message.";
}
?>

<!-- Header -->
<header>
    <div class="logo"></div>
    <ul>
        <li><a href="#about">About us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#use-cases">Use Cases</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><button class="quote-btn">Request a Quote</button></li>
    </ul>
</header>

<!-- Hero Section -->
<section class="hero">
    <h1><?php echo $page_title; ?></h1>
    <p><?php echo $hero_subtitle; ?></p>
    <button class="consultation-btn">Book a consultation</button>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <h2>Services</h2>
    <p>At our digital marketing agency, we offer a range of services to help businesses grow and succeed online. These services include:</p>
    <div class="service-cards">
        <div class="card">
            <h3>Search engine optimization</h3>
            <p>Learn more</p>
        </div>
        <div class="card">
            <h3>Pay per click advertising</h3>
            <p>Learn more</p>
        </div>
        <div class="card">
            <h3>Social media marketing</h3>
            <p>Learn more</p>
        </div>
        <div class="card">
            <h3>Email marketing</h3>
            <p>Learn more</p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta">
    <h2>Let’s make things happen</h2>
    <p>Contact us today to learn more about how our digital marketing services can help your business grow and succeed online.</p>
    <button class="proposal-btn">Get your free proposal</button>
</section>

<!-- Contact Form Section -->
<section class="contact-form">
    <h2>Contact Us</h2>
    <?php if (!empty($confirmation_message)): ?>
        <p class="confirmation"><?php echo $confirmation_message; ?></p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>
</section>

<!-- Case Study Section -->
<section id="case-study" class="case-study">
    <h2>Case Study</h2>
    <div class="case-cards">
        <div class="case">
            <p>For a local restaurant, we implemented a strategic SEO campaign to increase website traffic by 30% and drive a 20% increase in sales.</p>
            <a href="#">Learn more</a>
        </div>
        <div class="case">
            <p>For a B2B software company, we developed an SEO strategy that resulted in a 40% increase in organic traffic.</p>
            <a href="#">Learn more</a>
        </div>
        <div class="case">
            <p>For a national retail chain, we created a custom PPC campaign that generated 20% more sales and a 25% increase in conversion rates.</p>
            <a href="#">Learn more</a>
        </div>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h4>Your Logo</h4>
            <p>Your tagline here</p>
            <h5>Subscribe Now</h5>
            <form action="#" method="post">
                <input type="email" placeholder="Enter your Email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        
        <div class="footer-column">
            <h5>Information</h5>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">More Search</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Events</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h5>Helpful Links</h5>
            <ul>
                <li><a href="#">Services</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h5>Our Services</h5>
            <ul>
                <li><a href="#">Brand List</a></li>
                <li><a href="#">Order</a></li>
                <li><a href="#">Return & Exchange</a></li>
                <li><a href="#">Fashion List</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        
        <div class="footer-column">
            <h5>Contact Us</h5>
            <p><i class="fa fa-phone"></i> +91 9999 999 999</p>
            <p><i class="fa fa-envelope"></i> youremail@domain.com</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2018 Company Ltd | All rights reserved.</p>
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
        </ul>
    </div>
</footer>


<script src="scripts.js"></script>
</body>
</html>
