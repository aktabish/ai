<?php
	session_start();
	/*if (!isset($_SESSION['user_id'])) 
	{
		header("Location: signin");
		exit();
	}*/
	
	include 'db.php';
	include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'layout/head.php';
	?>
	<!-- Page Title -->
	<title>Coming Soon | AI Learner</title>

	<meta name="description" content="This part of website is under construction. This interesting feature is coming soon.">
	<meta name="robots" content="noindex, nofollow">
	<meta property="og:title" content="Cooking and Fashion Using AI - Chapter 11 | AI Learner">
	<meta property="og:description" content="This part of website is under construction. This interesting feature is coming soon.">
	<meta property="og:url" content="https://ailearner.free.nf/coming-soon">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">


	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Cooking and Fashion Using AI - Chapter 11 | AI Learner">
	<meta name="twitter:description" content="This part of website is under construction. This interesting feature is coming soon.">
	<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
	<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
</head>
<body>
	<?php
	include 'layout/header.php';
	?>
	<section class="hero">
		<div class="hero-content">
			<h1>Coming Soon...</h1>
			<a href="/">Home</a>
			|
			<a href="/ai-course">All Modules</a>
		</div>
	</section>

	<div class="container">
		<div class="section">
			<h2>🚀 Coming Soon</h2><br>
			<p><strong>We're building something amazing for learners, students, and curious minds.<br>
			AI Learner will be live very soon. Stay tuned!</strong></p>
			<p><a href="/ai-course" ><i>Start Learning</i></a></p>
		</div>
	</div>
	
	<?php
		include 'layout/footer.php';
	?>

</body>
</html>
