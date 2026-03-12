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
<!-- HERO SECTION -->

<section class="blog-hero text-white text-center d-flex align-items-center">
<div class="container">
<h1>Our Blog</h1>
<p>Insights, News, and Technology Trends</p>
</div>
</section>

<?php

$blogs = [

[
"id"=>1,
"title"=>"Future of Cloud Infrastructure",
"category"=>"Cloud",
"image"=>"assets/images/blog1.jpg",
"date"=>"March 2026"
],

[
"id"=>2,
"title"=>"How DevOps Improves Deployment Speed",
"category"=>"DevOps",
"image"=>"assets/images/blog2.jpg",
"date"=>"February 2026"
],

[
"id"=>3,
"title"=>"AI Transforming Business Automation",
"category"=>"AI",
"image"=>"assets/images/blog3.jpg",
"date"=>"January 2026"
],

[
"id"=>4,
"title"=>"Top Cyber Security Practices",
"category"=>"Security",
"image"=>"assets/images/blog4.jpg",
"date"=>"December 2025"
],

[
"id"=>5,
"title"=>"Building Scalable SaaS Platforms",
"category"=>"Software",
"image"=>"assets/images/blog5.jpg",
"date"=>"November 2025"
],

[
"id"=>6,
"title"=>"Mobile App Development Trends",
"category"=>"Mobile",
"image"=>"assets/images/blog6.jpg",
"date"=>"October 2025"
]

];

?>

<!-- CATEGORY FILTER -->

<section class="container mt-5 text-center">

<h2>Blog Categories</h2>

<div class="mt-3">

<button class="btn btn-outline-primary blog-filter" data-filter="all">All</button>
<button class="btn btn-outline-primary blog-filter" data-filter="Cloud">Cloud</button>
<button class="btn btn-outline-primary blog-filter" data-filter="DevOps">DevOps</button>
<button class="btn btn-outline-primary blog-filter" data-filter="AI">AI</button>
<button class="btn btn-outline-primary blog-filter" data-filter="Security">Security</button>
<button class="btn btn-outline-primary blog-filter" data-filter="Software">Software</button>

</div>

</section>


<!-- BLOG GRID -->

<section class="container mt-5">

<div class="row" id="blogGrid">

<?php foreach($blogs as $blog){ ?>

<div class="col-md-4 mb-4 blog-item" data-category="<?php echo $blog['category']; ?>">

<div class="card blog-card">

<img src="<?php echo $blog['image']; ?>" class="card-img-top">

<div class="card-body">

<span class="badge bg-primary"><?php echo $blog['category']; ?></span>

<h5 class="mt-2"><?php echo $blog['title']; ?></h5>

<p class="text-muted"><?php echo $blog['date']; ?></p>

<a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline-primary btn-sm">
Read More
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</section>


<!-- CTA -->

<section class="blog-cta text-center text-white">

<div class="container">

<h2>Stay Updated with Technology</h2>

<p>Subscribe to get the latest insights and industry updates.</p>

<a href="contact.php" class="btn btn-light mt-3">Subscribe</a>

</div>

</section>

<?php include 'includes/footer.php'; ?>