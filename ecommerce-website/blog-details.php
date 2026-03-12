<?php include 'includes/header.php'; ?>

<?php

$id = $_GET['id'];

$blogs = [

1 => [
"title" => "Future of Cloud Infrastructure",
"date" => "March 2026",
"author" => "Admin",
"image" => "assets/images/blog1.jpg",
"content" => "Cloud infrastructure is transforming how businesses deploy and scale applications. 
Modern companies rely on scalable cloud services like AWS, Azure, and Google Cloud to improve reliability, 
reduce infrastructure costs, and deploy applications globally. By adopting containerization and microservices 
architecture, organizations can build highly flexible and resilient systems."
],

2 => [
"title" => "How DevOps Improves Deployment Speed",
"date" => "February 2026",
"author" => "Admin",
"image" => "assets/images/blog2.jpg",
"content" => "DevOps combines development and operations teams to automate and accelerate software delivery. 
Using CI/CD pipelines, automated testing, and container deployment, teams can release updates faster 
while maintaining stability and security."
],

3 => [
"title" => "AI Transforming Business Automation",
"date" => "January 2026",
"author" => "Admin",
"image" => "assets/images/blog3.jpg",
"content" => "Artificial Intelligence is revolutionizing industries by automating repetitive tasks, 
analyzing data, and improving decision-making processes. Businesses are adopting AI tools for analytics, 
customer service, and process optimization."
]

];

$blog = $blogs[$id];

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

<section class="blog-detail-hero text-white text-center d-flex align-items-center">

<div class="container">

<h1><?php echo $blog['title']; ?></h1>

<p>By <?php echo $blog['author']; ?> | <?php echo $blog['date']; ?></p>

</div>

</section>


<!-- BLOG CONTENT -->

<section class="container mt-5">

<div class="row">

<div class="col-md-8">

<img src="<?php echo $blog['image']; ?>" class="img-fluid rounded mb-4">

<p>
<?php echo $blog['content']; ?>
</p>

<p>
Technology continues to evolve rapidly, and businesses must adapt to new
tools and platforms to remain competitive in the digital era.
</p>

</div>


<!-- SIDEBAR -->

<div class="col-md-4">

<h4>Recent Posts</h4>

<ul class="list-group">

<li class="list-group-item">
<a href="blog-details.php?id=1">Future of Cloud Infrastructure</a>
</li>

<li class="list-group-item">
<a href="blog-details.php?id=2">How DevOps Improves Deployment Speed</a>
</li>

<li class="list-group-item">
<a href="blog-details.php?id=3">AI Transforming Business Automation</a>
</li>

</ul>

</div>

</div>

</section>


<!-- RELATED POSTS -->

<section class="container mt-5">

<h2 class="text-center">Related Articles</h2>

<div class="row mt-4">

<div class="col-md-4">

<div class="card blog-card">

<img src="assets/images/blog2.jpg" class="card-img-top">

<div class="card-body">

<h5>How DevOps Improves Deployment Speed</h5>

<a href="blog-details.php?id=2" class="btn btn-outline-primary btn-sm">
Read More
</a>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card blog-card">

<img src="assets/images/blog3.jpg" class="card-img-top">

<div class="card-body">

<h5>AI Transforming Business Automation</h5>

<a href="blog-details.php?id=3" class="btn btn-outline-primary btn-sm">
Read More
</a>

</div>

</div>

</div>

</div>

</section>


<!-- CTA -->

<section class="blog-detail-cta text-center text-white">

<div class="container">

<h2>Need Technology Solutions?</h2>

<p>Contact our team to build powerful digital products.</p>

<a href="contact.php" class="btn btn-light mt-3">Contact Us</a>

</div>

</section>


<?php include 'includes/footer.php'; ?>