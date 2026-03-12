<?php include 'includes/header.php'; ?>

<!-- HERO SECTION -->
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
<section class="career-hero text-white text-center d-flex align-items-center">

<div class="container">

<h1>Careers</h1>
<p>Join our team and build the future of technology</p>

</div>

</section>



<!-- JOB OPENINGS -->

<section class="container mt-5">

<h2 class="text-center">Current Job Openings</h2>

<div class="row mt-4">

<div class="col-md-4 mb-4">

<div class="job-card">

<h4>Frontend Developer</h4>

<p><strong>Location:</strong> Remote</p>

<p><strong>Experience:</strong> 2+ Years</p>

<p>Build modern UI for web applications.</p>

<button class="btn btn-primary" onclick="showForm('Frontend Developer')">
Apply Now
</button>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="job-card">

<h4>Backend Developer</h4>

<p><strong>Location:</strong> Remote</p>

<p><strong>Experience:</strong> 3+ Years</p>

<p>Develop scalable backend APIs and systems.</p>

<button class="btn btn-primary" onclick="showForm('Backend Developer')">
Apply Now
</button>

</div>

</div>


<div class="col-md-4 mb-4">

<div class="job-card">

<h4>DevOps Engineer</h4>

<p><strong>Location:</strong> Remote</p>

<p><strong>Experience:</strong> 3+ Years</p>

<p>Manage CI/CD pipelines and cloud infrastructure.</p>

<button class="btn btn-primary" onclick="showForm('DevOps Engineer')">
Apply Now
</button>

</div>

</div>

</div>

</section>



<!-- APPLICATION FORM -->

<section class="container mt-5" id="applicationForm" style="display:none;">

<h2 class="text-center">Job Application</h2>

<form action="apply-job.php" method="POST" enctype="multipart/form-data" class="mt-4">

<input type="hidden" name="position" id="positionField">

<div class="row">

<div class="col-md-6 mb-3">

<input type="text" name="name" class="form-control" placeholder="Full Name" required>

</div>

<div class="col-md-6 mb-3">

<input type="email" name="email" class="form-control" placeholder="Email Address" required>

</div>

<div class="col-md-6 mb-3">

<input type="text" name="phone" class="form-control" placeholder="Phone Number">

</div>

<div class="col-md-6 mb-3">

<input type="file" name="resume" class="form-control" required>

</div>

<div class="col-12 mb-3">

<textarea name="message" class="form-control" placeholder="Cover Letter"></textarea>

</div>

<div class="col-12 text-center">

<button type="submit" class="btn btn-primary">Submit Application</button>

</div>

</div>

</form>

</section>

<?php include 'includes/footer.php'; ?>