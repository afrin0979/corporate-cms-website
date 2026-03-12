<?php include 'includes/header.php'; ?>

<!-- PAGE HERO -->
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
<section class="service-hero text-white text-center d-flex align-items-center">

<div class="container">

<h1>Our Services</h1>
<p>Powerful Technology & Infrastructure Solutions for Modern Businesses</p>

</div>

</section>


<!-- SERVICES GRID -->

<section class="container mt-5">

<div class="row text-center">

<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-cloud fa-2x text-primary mb-3"></i>

<h4>Cloud Infrastructure</h4>

<p>
Scalable cloud architecture solutions using AWS, Azure, and modern DevOps tools.
</p>

<a href="service-details.php?id=1" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-code fa-2x text-primary mb-3"></i>

<h4>Software Development</h4>

<p>
Custom enterprise applications, SaaS platforms, and digital product development.
</p>

<a href="service-details.php?id=2" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-mobile-screen fa-2x text-primary mb-3"></i>

<h4>Mobile App Development</h4>

<p>
Build powerful Android and iOS mobile applications with modern technologies.
</p>

<a href="service-details.php?id=3" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-server fa-2x text-primary mb-3"></i>

<h4>DevOps Automation</h4>

<p>
CI/CD pipelines, infrastructure automation, and deployment optimization.
</p>

<a href="service-details.php?id=4" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-lock fa-2x text-primary mb-3"></i>

<h4>Cyber Security</h4>

<p>
Protect enterprise systems with advanced security monitoring and threat protection.
</p>

<a href="service-details.php?id=5" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="card service-card p-4">

<i class="fa-solid fa-robot fa-2x text-primary mb-3"></i>

<h4>AI & Automation</h4>

<p>
Artificial intelligence solutions, process automation, and smart analytics.
</p>

<a href="service-details.php?id=6" class="btn btn-outline-primary mt-3">
Learn More
</a>

</div>

</div>

</div>

</section>


<!-- PROCESS SECTION -->

<section class="container mt-5 text-center">

<h2>Our Process</h2>

<div class="row mt-4">

<div class="col-md-3">

<h4>1</h4>
<p>Consultation</p>

</div>

<div class="col-md-3">

<h4>2</h4>
<p>Planning</p>

</div>

<div class="col-md-3">

<h4>3</h4>
<p>Development</p>

</div>

<div class="col-md-3">

<h4>4</h4>
<p>Deployment</p>

</div>

</div>

</section>


<!-- CTA -->

<section class="service-cta text-center text-white">

<div class="container">

<h2>Need a Custom Solution?</h2>

<p>Contact our team to discuss your project.</p>

<a href="contact.php" class="btn btn-light mt-3">Start a Project</a>

</div>

</section>

<?php include 'includes/footer.php'; ?>