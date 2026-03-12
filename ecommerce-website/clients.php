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
        <h1 class="fw-bold">Our Clients</h1>
        <p>Trusted by companies and organizations worldwide</p>
    </div>
</section>

<section class="clients-section py-5">
<div class="container">

<div class="row g-4">

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client1.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client2.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client3.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client4.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client5.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client6.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client7.png" alt="Client">
</a>
</div>

<!-- Client -->
<div class="col-lg-3 col-md-4 col-6">
<a href="https://example.com" target="_blank" class="client-card">
<img src="assets/images/clients/client8.png" alt="Client">
</a>
</div>

</div>

</div>
</section>


<style>

.client-card{
display:flex;
align-items:center;
justify-content:center;
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 6px 18px rgba(0,0,0,0.08);
transition:0.3s;
}

.client-card:hover{
transform:translateY(-6px);
box-shadow:0 12px 28px rgba(0,0,0,0.15);
}

.client-card img{
max-width:120px;
opacity:0.7;
transition:0.3s;
}

.client-card:hover img{
opacity:1;
transform:scale(1.05);
}

</style>

<?php include 'includes/footer.php'; ?>