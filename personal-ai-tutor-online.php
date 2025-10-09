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
		<title>AI Ustaad – Learn AI with Personal AI Teacher Online | AI Learner</title>
		<meta name="description" content="AI Ustaad is your personal AI teacher online. Learn Artificial Intelligence easily with our AI teacher for kids and beginners. Available 24/7 for one-on-one learning." />
		<meta name="keywords" content="Contact AI Learner, AI course help, AI support, AI education contact">
		<meta name="author" content="AI Learner Team">
		
		<!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
		<meta name="title" property="og:title" content="AI Ustaad – Learn AI with Personal AI teacher Online | AI Learner" >
		<meta property="og:description" content="AI Ustaad is your personal AI teacher online. Learn Artificial Intelligence easily with our AI teacher for kids and beginners. Available 24/7 for one-on-one learning.">
		<meta property="og:url" content="https://ailearner.free.nf/personal-ai-tutor-online">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="AI Ustaad – Learn AI with Personal AI Teacher Online | AI Learner">
		<meta name="twitter:description" content="AI Ustaad is your personal AI teacher online. Learn Artificial Intelligence easily with our AI teacher for kids and beginners. Available 24/7 for one-on-one learning.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/personal-ai-tutor-online",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
	</script>

	</head>
<body>
	<?php
	include 'layout/header.php';
	?>
	
	<section class="hero">
		<div class="hero-content">
			<h1>AI Ustaad – Your Personal AI Teacher Online</h1>
			<a href="/">Home</a>
			|
			<a href="/ai-course">All Modules</a>
		</div>
	</section>

	<div class="container">
		<div class="section">
			<p><strong>Best AI teacher for kids and beginners to learn Artificial Intelligence with ease.</strong></p>
		</div>
		
		<div class="section">
			<h2>Learn Artificial Intelligence with AI Ustaad</h2>
			<p><strong>AI Ustaad</strong> is an <strong>AI teacher</strong>. Whether you're a student, a curious learner, or a parent looking for a kid-friendly <strong>AI teacher</strong>, this is your perfect learning companion.</p>
		</div>
		
		<div class="section">
		  <h3>📚 AI Learning Made Easy</h3>
		  <p>Our <strong>online AI teacher</strong> breaks down complex terms into simple, fun lessons for everyone – especially children and non-tech users.</p>
		</div>
		
		<div class="section">
		  <h3>🕒 24/7 One-on-One Teaching</h3>
		  <p>With AI Ustaad, you get <strong>personal AI teaching</strong> around the clock — perfect for school kids, students, and curious minds anytime via email.</p>
		</div>
		
		<div class="section">
		  <h3>🎓 AI Courses</h3>
		  <p>Follow guided lessons directly with AI Ustaad to ask anything about AI, coding, or tech topics in Urdu / Hindi or English.</p>
		</div>
		
		<!--div class="section">
		  <h3>🎥 Video & Visual Learning</h3>
		  <p>Watch AI-generated educational videos and interactive lessons that make AI easy to understand and exciting to learn.</p>
		</div-->
		
		<div class="section">
			<h2>Start Learning AI Today!</h2>
			<h3><a href="mailto:aktabish@hotmail.com">24/7 Email with AI Ustaad</a></h3>
			<br />
			<h3><a href="mailto:aktabish@hotmail.com">Book a Live AI Teaching Session</a></h3>
			<br />
			<h3><a href="/ai-course">Explore Full AI Course &rarr;</a></h3>
		</div>

		
		<div class="section contact-form-2">
			<h2>Contact AI Ustaad</h2>
			<form method="POST" id="contactForm">
				<input placeholder="Your Name" type="text" name="name" id="name" minlength=3 maxlength=50 required />
				
				<input placeholder="Your Email" type="email" name="email" id="email" minlength=3 maxlength=50 required />
				
				<textarea placeholder="Your Message" name="message" id="message" rows="6" minlength=3 maxlength=200 required></textarea>

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
