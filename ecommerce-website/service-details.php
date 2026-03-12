<?php include 'includes/header.php'; ?>

<?php
$id = $_GET['id'];

$services = [
1 => [
"title" => "Cloud Infrastructure",
"description" => "Scalable cloud architecture solutions for modern enterprises using AWS, Azure, and container-based deployments.",
"image" => "assets/images/service1.jpg"
],

2 => [
"title" => "Software Development",
"description" => "Custom enterprise software, SaaS platforms, and scalable web applications built with modern technologies.",
"image" => "assets/images/service2.jpg"
],

3 => [
"title" => "Mobile App Development",
"description" => "Build powerful Android and iOS mobile applications with modern frameworks and cloud integration.",
"image" => "assets/images/service3.jpg"
],

4 => [
"title" => "DevOps Automation",
"description" => "CI/CD pipeline automation, infrastructure as code, and efficient deployment strategies.",
"image" => "assets/images/service4.jpg"
],

5 => [
"title" => "Cyber Security",
"description" => "Advanced security solutions including vulnerability testing, monitoring, and threat protection.",
"image" => "assets/images/service5.jpg"
],

6 => [
"title" => "AI & Automation",
"description" => "Artificial intelligence solutions and business process automation for smarter operations.",
"image" => "assets/images/service6.jpg"
]
];

$service = $services[$id];
?>
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

<!-- HERO -->

<section class="service-detail-hero text-white text-center d-flex align-items-center">

<div class="container">

<h1><?php echo $service['title']; ?></h1>
<p><?php echo $service['description']; ?></p>

</div>

</section>



<!-- SERVICE DETAILS -->

<section class="container mt-5">

<div class="row align-items-center">

<div class="col-md-6">

<img src="<?php echo $service['image']; ?>" class="img-fluid rounded">

</div>

<div class="col-md-6">

<h2><?php echo $service['title']; ?></h2>

<p>
Our team provides industry-leading solutions designed to help businesses
scale efficiently and securely in the digital age.
</p>

<ul>

<li>Enterprise-grade architecture</li>
<li>High performance and scalability</li>
<li>Secure infrastructure and compliance</li>
<li>Continuous monitoring and support</li>

</ul>

</div>

</div>

</section>



<!-- FEATURES -->

<section class="container mt-5">

<h2 class="text-center">Key Features</h2>

<div class="row mt-4 text-center">

<div class="col-md-4">

<div class="card p-4 shadow">

<h4>High Scalability</h4>

<p>
Our solutions are designed to scale with your growing business.
</p>

</div>

</div>


<div class="col-md-4">

<div class="card p-4 shadow">

<h4>Security First</h4>

<p>
Advanced security architecture ensures data protection.
</p>

</div>

</div>


<div class="col-md-4">

<div class="card p-4 shadow">

<h4>24/7 Support</h4>

<p>
Dedicated technical support for uninterrupted service.
</p>

</div>

</div>

</div>

</section>



<!-- PROCESS -->

<section class="container mt-5 text-center">

<h2>Our Service Process</h2>

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

<section class="service-detail-cta text-center text-white">

<div class="container">

<h2>Start Your Project Today</h2>

<p>Let’s discuss how our services can help your business grow.</p>

<a href="contact.php" class="btn btn-light mt-3">Contact Us</a>

</div>

</section>


<?php include 'includes/footer.php'; ?>