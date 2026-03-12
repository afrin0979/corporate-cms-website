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
        <h1 class="fw-bold">Our Team</h1>
        <p>Meet the talented professionals behind our success</p>
    </div>
</section>

<section class="team-section py-5">
<div class="container">

<div class="row g-4">

<!-- Team Member -->
<div class="col-lg-3 col-md-6">
<div class="team-card">
<img src="assets/images/team1.jpg" class="img-fluid">

<div class="team-content">
<h5>John Smith</h5>
<p>CEO & Founder</p>

<div class="social">
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-github"></i></a>
</div>

</div>
</div>
</div>

<!-- Team Member -->
<div class="col-lg-3 col-md-6">
<div class="team-card">
<img src="assets/images/team2.jpg" class="img-fluid">

<div class="team-content">
<h5>Sarah Johnson</h5>
<p>Product Manager</p>

<div class="social">
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-dribbble"></i></a>
</div>

</div>
</div>
</div>

<!-- Team Member -->
<div class="col-lg-3 col-md-6">
<div class="team-card">
<img src="assets/images/team3.jpg" class="img-fluid">

<div class="team-content">
<h5>David Lee</h5>
<p>Lead Developer</p>

<div class="social">
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-github"></i></a>
</div>

</div>
</div>
</div>

<!-- Team Member -->
<div class="col-lg-3 col-md-6">
<div class="team-card">
<img src="assets/images/team4.jpg" class="img-fluid">

<div class="team-content">
<h5>Emily Davis</h5>
<p>UI/UX Designer</p>

<div class="social">
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-dribbble"></i></a>
</div>

</div>
</div>
</div>

</div>

</div>
</section>


<style>

.team-card{
background:white;
border-radius:12px;
overflow:hidden;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.team-card:hover{
transform:translateY(-8px);
box-shadow:0 12px 30px rgba(0,0,0,0.15);
}

.team-card img{
width:100%;
height:260px;
object-fit:cover;
}

.team-content{
padding:20px;
text-align:center;
}

.team-content h5{
font-weight:700;
margin-bottom:5px;
}

.team-content p{
color:#777;
font-size:14px;
}

.social{
margin-top:12px;
}

.social a{
display:inline-block;
width:35px;
height:35px;
line-height:35px;
border-radius:50%;
background:#f4f4f4;
color:#333;
margin:3px;
transition:0.3s;
}

.social a:hover{
background:#007bff;
color:white;
}

</style>

<?php include 'includes/footer.php'; ?>