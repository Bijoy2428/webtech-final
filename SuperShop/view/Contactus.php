<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="contact-section">
<div class="contact-info">
    <div><i class="fas fa-map-marker-alt"></i>Dhaka,Bangladesh</div>
    <div><i class="fas fa-envelope"></i>contact@gmail.com</div>
    <div><i class="fas fa-phone"></i>01834833518</div>
    <div><i class="fas fa-clock"></i>Mon - Sat 8:00 AM to 7:00 PM </div>
</div>
<div class="contact-form">
<h2>Contact Us</h2>
<form class="contact" action="Home.php" method="post"></form>
<input type="text" name="name" class="text-box" placeholder="Your Name" required>
<input type="email" name="email" class="text-box" placeholder="Your Email" required>
<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
<input type="submit" name="submit" class="send-btn" value="Send">
</div>
</div>
    
</body>
</html>