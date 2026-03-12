<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Company Website</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- FontAwesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<section class="page-header bg-dark text-white text-center py-5">
<div class="container">
<h1 class="fw-bold">Contact Us</h1>
<p>We would love to hear from you</p>
</div>
</section>

<section class="contact-section py-5">
<div class="container">

<div class="row g-5">

<!-- Contact Info -->
<div class="col-lg-5">

<div class="contact-info">

<h4>Get In Touch</h4>
<p>Feel free to contact us for any inquiries, services, or project discussions.</p>

<div class="info-item">
<i class="fas fa-map-marker-alt"></i>
<span>123 Business Street, Tech City</span>
</div>

<div class="info-item">
<i class="fas fa-phone"></i>
<span>+91 9876543210</span>
</div>

<div class="info-item">
<i class="fas fa-envelope"></i>
<span>info@company.com</span>
</div>

</div>

</div>

<!-- Contact Form -->
<div class="col-lg-7">

<div class="contact-form">

<h4>Send Message</h4>

<form action="send-message.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<input type="text" name="name" class="form-control" placeholder="Your Name" required>
</div>

<div class="col-md-6 mb-3">
<input type="email" name="email" class="form-control" placeholder="Your Email" required>
</div>

</div>

<div class="mb-3">
<input type="text" name="subject" class="form-control" placeholder="Subject">
</div>

<div class="mb-3">
<textarea name="message" rows="5" class="form-control" placeholder="Your Message"></textarea>
</div>

<button type="submit" class="btn btn-primary">
Send Message
</button>

</form>

</div>

</div>

</div>

</div>
</section>

<!-- Google Map -->

<section class="map-section">

<iframe
src="https://www.google.com/maps?q=Udupi,India&output=embed"
width="100%"
height="400"
style="border:0;"
allowfullscreen=""
loading="lazy">
</iframe>

</section>


<style>

.contact-info{
background:#f8f9fa;
padding:30px;
border-radius:10px;
}

.contact-info h4{
font-weight:700;
margin-bottom:15px;
}

.info-item{
display:flex;
align-items:center;
margin-bottom:15px;
font-size:15px;
}

.info-item i{
width:35px;
height:35px;
background:#007bff;
color:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
margin-right:10px;
}

.contact-form{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 6px 20px rgba(0,0,0,0.08);
}

.contact-form h4{
font-weight:700;
margin-bottom:20px;
}

</style>

<?php include 'includes/footer.php'; ?>