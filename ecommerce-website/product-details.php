<?php include 'includes/header.php'; ?>

<?php

$id = $_GET['id'];

$products = [

1 => [
"name" => "Enterprise CRM",
"price" => "$199",
"description" => "Powerful CRM platform designed to manage customers, sales pipelines, and business workflows.",
"image" => "assets/images/product1.jpg"
],

2 => [
"name" => "Cloud Management Platform",
"price" => "$299",
"description" => "Advanced platform to manage multi-cloud infrastructure and deployment pipelines.",
"image" => "assets/images/product2.jpg"
],

3 => [
"name" => "Project Management Tool",
"price" => "$149",
"description" => "Collaborative project management software for teams and enterprises.",
"image" => "assets/images/product3.jpg"
],

4 => [
"name" => "AI Analytics Dashboard",
"price" => "$249",
"description" => "AI-powered analytics dashboard for real-time insights and business intelligence.",
"image" => "assets/images/product4.jpg"
],

5 => [
"name" => "DevOps Automation Suite",
"price" => "$179",
"description" => "Automate CI/CD pipelines and streamline deployment workflows.",
"image" => "assets/images/product5.jpg"
],

6 => [
"name" => "Cyber Security Monitor",
"price" => "$219",
"description" => "Advanced monitoring and threat detection platform for enterprise security.",
"image" => "assets/images/product6.jpg"
]

];

$product = $products[$id];

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


<!-- PRODUCT HERO -->

<section class="product-detail-hero text-white text-center d-flex align-items-center">

<div class="container">

<h1><?php echo $product['name']; ?></h1>

<p><?php echo $product['description']; ?></p>

</div>

</section>



<!-- PRODUCT DETAILS -->

<section class="container mt-5">

<div class="row align-items-center">

<div class="col-md-6">

<img src="<?php echo $product['image']; ?>" class="img-fluid rounded">

</div>

<div class="col-md-6">

<h2><?php echo $product['name']; ?></h2>

<h4 class="text-primary"><?php echo $product['price']; ?></h4>

<p>
This product is built for enterprise environments and designed
to scale with your business growth.
</p>

<ul>

<li>Cloud ready architecture</li>
<li>High security standards</li>
<li>Scalable microservices design</li>
<li>24/7 monitoring support</li>

</ul>

<a href="#" class="btn btn-primary mt-3">Request Demo</a>

</div>

</div>

</section>



<!-- PRODUCT FEATURES -->

<section class="container mt-5">

<h2 class="text-center">Product Features</h2>

<div class="row mt-4 text-center">

<div class="col-md-4">

<div class="card p-4 shadow">

<h4>Automation</h4>

<p>Automate workflows and reduce manual work.</p>

</div>

</div>


<div class="col-md-4">

<div class="card p-4 shadow">

<h4>Analytics</h4>

<p>Advanced analytics dashboards and insights.</p>

</div>

</div>


<div class="col-md-4">

<div class="card p-4 shadow">

<h4>Integration</h4>

<p>Connect with popular business tools and APIs.</p>

</div>

</div>

</div>

</section>



<!-- SPECIFICATIONS -->

<section class="container mt-5">

<h2 class="text-center">Specifications</h2>

<table class="table mt-4">

<tr>
<th>Platform</th>
<td>Web / Cloud</td>
</tr>

<tr>
<th>Technology</th>
<td>PHP / API / Cloud Infrastructure</td>
</tr>

<tr>
<th>Security</th>
<td>SSL Encryption</td>
</tr>

<tr>
<th>Support</th>
<td>24/7 Technical Support</td>
</tr>

<tr>
<th>Deployment</th>
<td>Cloud / On-Premise</td>
</tr>

</table>

</section>



<!-- CTA -->

<section class="product-detail-cta text-center text-white">

<div class="container">

<h2>Interested in This Product?</h2>

<p>Contact us to schedule a demo or request a quote.</p>

<a href="contact.php" class="btn btn-light mt-3">Contact Sales</a>

</div>

</section>


<?php include 'includes/footer.php'; ?>