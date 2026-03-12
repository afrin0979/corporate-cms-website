<?php
$page = $_GET['page'] ?? 'home';
$site_title = "TechCore | " . ucfirst(str_replace('-', ' ', $page));
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $site_title; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>

body{
font-family:'Plus Jakarta Sans',sans-serif;
background:#f8f9fa;
}

.navbar{
background:#0a0c10;
}

.hero{
background:linear-gradient(120deg,#0a0c10,#1a2332);
color:white;
padding:120px 0;
}

.service-card{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
transition:.3s;
}

.service-card:hover{
transform:translateY(-8px);
}

footer{
background:#0a0c10;
color:#aaa;
padding:60px 0 30px;
}

</style>

</head>
<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
TECHCORE
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="index.php?page=about">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="index.php?page=services">Services</a>
</li>

<li class="nav-item">
<a class="nav-link" href="index.php?page=blog">Blog</a>
</li>

<li class="nav-item">
<a class="nav-link" href="index.php?page=contact">Contact</a>
</li>

</ul>

</div>

</div>

</nav>


<?php

switch($page){

case "home":
?>

<!-- HERO -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1 class="display-4 fw-bold">
Build Digital Solutions With TechCore
</h1>

<p class="lead mt-3">
Modern cloud infrastructure and enterprise software development.
</p>

<a href="index.php?page=services" class="btn btn-primary btn-lg mt-3">
Our Services
</a>

</div>

<div class="col-lg-6 text-center">

<img src="https://images.unsplash.com/photo-1551434678-e076c223a692"
class="img-fluid rounded">

</div>

</div>

</div>

</section>


<!-- SERVICES -->

<section class="py-5">

<div class="container">

<div class="row g-4">

<div class="col-md-4">

<div class="service-card">

<i class="fa-solid fa-cloud fs-1 text-primary"></i>

<h4 class="mt-3">Cloud Solutions</h4>

<p>Secure cloud architecture for modern businesses.</p>

</div>

</div>

<div class="col-md-4">

<div class="service-card">

<i class="fa-solid fa-code fs-1 text-primary"></i>

<h4 class="mt-3">Software Development</h4>

<p>Custom web and mobile applications.</p>

</div>

</div>

<div class="col-md-4">

<div class="service-card">

<i class="fa-solid fa-shield-halved fs-1 text-primary"></i>

<h4 class="mt-3">Cyber Security</h4>

<p>Protect your business infrastructure.</p>

</div>

</div>

</div>

</div>

</section>

<?php
break;


case "about":
include "about.php";
break;

case "services":
include "services.php";
break;

case "blog":
include "blog.php";
break;

case "contact":
include "contact.php";
break;

default:
echo "<h1 class='text-center p-5'>404 Page Not Found</h1>";

}

?>


<!-- FOOTER -->

<footer>

<div class="container text-center">

<h4>TECHCORE</h4>

<p>Enterprise digital solutions company.</p>

<p>© <?php echo date('Y'); ?> TechCore</p>

</div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>