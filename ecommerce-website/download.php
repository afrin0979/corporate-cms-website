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
<h1 class="fw-bold">Downloads</h1>
<p>Access our brochures, catalogs, and important documents</p>
</div>
</section>

<section class="download-section py-5">
<div class="container">

<div class="row g-4">

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-pdf"></i>
</div>

<h5>Company Brochure</h5>
<p>Overview of our services, solutions, and company profile.</p>

<a href="assets/downloads/company-brochure.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-pdf"></i>
</div>

<h5>Product Catalog</h5>
<p>Detailed catalog of all our products and specifications.</p>

<a href="assets/downloads/product-catalog.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-pdf"></i>
</div>

<h5>Service Portfolio</h5>
<p>Comprehensive guide to the services we provide.</p>

<a href="assets/downloads/service-portfolio.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-word"></i>
</div>

<h5>Technical Documentation</h5>
<p>Technical information about our infrastructure solutions.</p>

<a href="assets/downloads/technical-doc.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-alt"></i>
</div>

<h5>Installation Guide</h5>
<p>Step-by-step guide for installation and configuration.</p>

<a href="assets/downloads/install-guide.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

<!-- Download Item -->
<div class="col-lg-4 col-md-6">
<div class="download-card">

<div class="file-icon">
<i class="fas fa-file-pdf"></i>
</div>

<h5>Project Case Studies</h5>
<p>Real-world case studies of our completed projects.</p>

<a href="assets/downloads/case-studies.pdf" class="btn btn-primary" download>
Download
</a>

</div>
</div>

</div>

</div>
</section>


<style>

.download-card{
background:white;
padding:30px;
border-radius:12px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.download-card:hover{
transform:translateY(-6px);
box-shadow:0 14px 30px rgba(0,0,0,0.15);
}

.file-icon{
font-size:45px;
color:#dc3545;
margin-bottom:15px;
}

.download-card h5{
font-weight:700;
margin-bottom:10px;
}

.download-card p{
font-size:14px;
color:#666;
margin-bottom:15px;
}

</style>

<?php include 'includes/footer.php'; ?>