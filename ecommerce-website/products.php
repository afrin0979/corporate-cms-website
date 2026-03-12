<?php include 'includes/header.php'; ?>

<!-- HERO SECTION -->

<section class="product-hero text-white text-center d-flex align-items-center">
<div class="container">
<h1>Our Products</h1>
<p>Powerful Digital Products Designed for Modern Businesses</p>
</div>
</section>


<?php

$products = [

[
"id"=>1,
"name"=>"Enterprise CRM",
"category"=>"software",
"price"=>"$199",
"image"=>"assets/images/product1.jpg"
],

[
"id"=>2,
"name"=>"Cloud Management Platform",
"category"=>"cloud",
"price"=>"$299",
"image"=>"assets/images/product2.jpg"
],

[
"id"=>3,
"name"=>"Project Management Tool",
"category"=>"software",
"price"=>"$149",
"image"=>"assets/images/product3.jpg"
],

[
"id"=>4,
"name"=>"AI Analytics Dashboard",
"category"=>"ai",
"price"=>"$249",
"image"=>"assets/images/product4.jpg"
],

[
"id"=>5,
"name"=>"DevOps Automation Suite",
"category"=>"devops",
"price"=>"$179",
"image"=>"assets/images/product5.jpg"
],

[
"id"=>6,
"name"=>"Cyber Security Monitor",
"category"=>"security",
"price"=>"$219",
"image"=>"assets/images/product6.jpg"
]

];

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
<!-- CATEGORY FILTER -->

<section class="container mt-5 text-center">

<h2>Product Categories</h2>

<div class="mt-3">

<button class="btn btn-outline-primary filter-btn" data-filter="all">All</button>

<button class="btn btn-outline-primary filter-btn" data-filter="software">Software</button>

<button class="btn btn-outline-primary filter-btn" data-filter="cloud">Cloud</button>

<button class="btn btn-outline-primary filter-btn" data-filter="ai">AI</button>

<button class="btn btn-outline-primary filter-btn" data-filter="security">Security</button>

<button class="btn btn-outline-primary filter-btn" data-filter="devops">DevOps</button>

</div>

</section>



<!-- PRODUCT GRID -->

<section class="container mt-5">

<div class="row" id="productGrid">

<?php foreach($products as $product){ ?>

<div class="col-md-4 mb-4 product-item" data-category="<?php echo $product['category']; ?>">

<div class="card product-card p-3">

<img src="<?php echo $product['image']; ?>" class="img-fluid">

<h4 class="mt-3"><?php echo $product['name']; ?></h4>

<p class="text-primary"><?php echo $product['price']; ?></p>

<a href="product-details.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">
View Details
</a>

</div>

</div>

<?php } ?>

</div>

</section>



<!-- CTA -->

<section class="product-cta text-center text-white">

<div class="container">

<h2>Need a Custom Product?</h2>

<p>Our team can build tailored enterprise solutions.</p>

<a href="contact.php" class="btn btn-light mt-3">Request Demo</a>

</div>

</section>


<?php include 'includes/footer.php'; ?>