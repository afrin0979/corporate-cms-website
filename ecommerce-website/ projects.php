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
        <h1 class="fw-bold">Our Projects</h1>
        <p>Explore some of the successful projects we have delivered</p>
    </div>
</section>

<section class="projects-section py-5">
<div class="container">

<div class="row g-4">

<!-- Project 1 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project1.jpg" alt="Project">

<div class="project-content">
<h5>Industrial Automation System</h5>
<p>Automation infrastructure for manufacturing plant operations.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

<!-- Project 2 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project2.jpg" alt="Project">

<div class="project-content">
<h5>Smart Warehouse Management</h5>
<p>Modern warehouse monitoring and inventory management solution.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

<!-- Project 3 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project3.jpg" alt="Project">

<div class="project-content">
<h5>Solar Energy Infrastructure</h5>
<p>Large scale solar infrastructure deployment for industrial clients.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

<!-- Project 4 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project4.jpg" alt="Project">

<div class="project-content">
<h5>Enterprise E-Commerce Platform</h5>
<p>Custom SaaS e-commerce platform with cloud infrastructure.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

<!-- Project 5 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project5.jpg" alt="Project">

<div class="project-content">
<h5>Data Center Infrastructure</h5>
<p>High availability data center deployment and optimization.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

<!-- Project 6 -->
<div class="col-lg-4 col-md-6">
<div class="project-card">

<img src="assets/images/projects/project6.jpg" alt="Project">

<div class="project-content">
<h5>AI Based Monitoring System</h5>
<p>AI powered monitoring and analytics system for enterprises.</p>

<a href="project-details.php" class="btn btn-primary btn-sm">
View Details
</a>

</div>
</div>
</div>

</div>

</div>
</section>


<style>

.project-card{
background:white;
border-radius:12px;
overflow:hidden;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.project-card:hover{
transform:translateY(-8px);
box-shadow:0 14px 30px rgba(0,0,0,0.15);
}

.project-card img{
width:100%;
height:220px;
object-fit:cover;
}

.project-content{
padding:20px;
}

.project-content h5{
font-weight:700;
margin-bottom:10px;
}

.project-content p{
font-size:14px;
color:#666;
margin-bottom:15px;
}

</style>

<?php include 'includes/footer.php'; ?>