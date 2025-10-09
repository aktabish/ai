<?php
	session_start();
	include 'db.php';
	include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<title>Contact Us – AI Learner</title>
		<meta name="description" content="Get in touch with the AI Learner team for questions, support, or collaborations. We're here to help you in your AI learning journey." />
		<meta name="keywords" content="Contact AI Learner, AI course help, AI support, AI education contact">
		<meta name="author" content="AI Learner Team">
		
		<!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
		<meta name="title" property="og:title" content="Contact Us – AI Learner" >
		<meta property="og:description" content="Get in touch with the AI Learner team for questions, support, or collaborations. We're here to help you in your AI learning journey.">
		<meta property="og:url" content="https://ailearner.free.nf/contact">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Contact Us – AI Learner">
		<meta name="twitter:description" content="Get in touch with the AI Learner team for questions, support, or collaborations. We're here to help you in your AI learning journey.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/contact",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
	</script>

	</head>
<body>
	<?php
	include 'layout/header.php';
	?>

	<div class="container">
		<div class="section contact-form">
			<h1>Contact Us</h1>
			<form method="POST" id="contactForm">
				<label for="name">Your Name</label>
				<input type="text" name="name" id="name" minlength=3 maxlength=50 required />

				<label for="email">Your Email</label>
				<input type="email" name="email" id="email" minlength=3 maxlength=50 required />

				<label for="message">Your Message</label>
				<textarea name="message" id="message" rows="6" minlength=3 maxlength=200 required></textarea>

				<button type="submit">Send Message</button>
				<div class="status-message" id="status"></div>
			</form>
		</div>
	</div>
	
	<?php
	include 'layout/footer.php';
	?>
	
	<script>
    const form = document.getElementById('contactForm');
    const status = document.getElementById('status');

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // Stop default form submission

      const formData = new FormData(form);

      fetch('contact-submit.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(result => {
        status.textContent = result;
        form.reset();
      })
      .catch(error => {
        console.error('Error:', error);
        status.textContent = "Oops! Something went wrong.";
      });
    });
  </script>
</body>
</html>
