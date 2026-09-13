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
		<title>Where AI Shows Up in Everyday Life – Chapter 2 | AI Learner</title>

		<!-- SEO Meta Description -->
		<meta name="description" content="Discover how Artificial Intelligence impacts your daily life – from smartphones and social media to healthcare, navigation, and beyond.">

		<!-- Open Graph (for Facebook, LinkedIn, etc.) -->
		<meta property="og:title" content="Where AI Shows Up in Everyday Life – Chapter 2 | AI Learner">
		<meta property="og:description" content="Explore how AI is quietly shaping the world around you – at home, work, and on the go.">
		<meta property="og:url" content="https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

		<!-- Twitter Card Meta -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Where AI Shows Up in Everyday Life – Chapter 2 | AI Learner">
		<meta name="twitter:description" content="From smart assistants to online shopping, see how AI is a part of your daily experiences.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "VideoObject",
		  "name": "Where AI Shows Up in Everyday Life",
		  "description": "See how AI appears in everyday tools and activities at home, school, and work.",
		  "thumbnailUrl": [
		    "https://img.youtube.com/vi/JK6VMNbTX0Q/hqdefault.jpg"
		  ],
		  "uploadDate": "2025-10-10T12:00:00+05:00",
		  "duration": "PT6M",
		  "embedUrl": "https://www.youtube.com/embed/JK6VMNbTX0Q",
		  "contentUrl": "https://www.youtube.com/watch?v=JK6VMNbTX0Q",
		  "url": "https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2",
		  "publisher": {
		    "@type": "Organization",
		    "name": "AI Learner",
		    "logo": {
		      "@type": "ImageObject",
		      "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		    }
		  },
		  "potentialAction": {
		    "@type": "WatchAction",
		    "target": [
		      {
		        "@type": "EntryPoint",
		        "urlTemplate": "https://www.youtube.com/watch?v=JK6VMNbTX0Q"
		      }
		    ]
		  }
		}
		</script>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "BreadcrumbList",
	  "itemListElement": [
		{"@type":"ListItem","position":1,"name":"Home","item":"https://ailearner.free.nf/"},
		{"@type":"ListItem","position":2,"name":"AI Course","item":"https://ailearner.free.nf/ai-course"},
		{"@type":"ListItem","position":3,"name":"Chapter 2: Where AI Shows Up in Everyday Life","item":"https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2"}
	  ]
	}
	</script>
	</head>
	<body>
		<?php
		include 'layout/header.php';
		?>
		<section class="hero">
			<div class="hero-content">
				<nav aria-label="Breadcrumb" class="breadcrumb">
					<ol style="list-style:none;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;padding:0;margin:10px 0;width:100%;text-align:center;">
						<li><a href="/">Home</a></li>
						<li style="margin:0 6px;">></li>
						<li><a href="/ai-course">AI Course</a></li>
						<li style="margin:0 6px;">></li>
						<li aria-current="page">Chapter 2: Where AI Shows Up in Everyday Life</li>
					</ol>
				</nav>
				<h1>Chapter 2: Where AI Shows Up in Everyday Life</h1>
			</div>
		</section>

		<div class="container">
			<div class="section" aria-labelledby="kids-video">
				<h2 id="kids-video">🎥 Video: Where AI Shows Up in Everyday Life</h2>
				<p style="margin-top: 4px;">Watch this short video to see how AI appears in everyday tools and activities.</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/JK6VMNbTX0Q?si=zLIfYYYjCIrM0SHK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
			<p>Artificial Intelligence (AI) isn't just science fiction—it’s already part of your everyday life. Let's explore how AI quietly helps you in ways you may not even notice.</p>
			</div>
			<div class="section">
				<h2>🧠 Smartphones and Virtual Assistants</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Google Assistant, Siri, Alexa</li>
					<li>These tools understand your voice and respond using AI. They can set reminders, answer questions, and even tell jokes!</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>📷 Social Media</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Facebook, Instagram, YouTube, TikTok</li>
					<li>AI suggests friends, filters content, recommends videos, and even detects harmful content.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🛒 Online Shopping</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Amazon, Flipkart, Daraz</li>
					<li>AI recommends products you might like based on what you’ve searched or bought before.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🚗 Maps and Navigation</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Google Maps, Uber</li>
					<li>AI helps you find the fastest route, avoid traffic, and even suggests where to eat or get fuel.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🎬 Streaming Services</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Netflix, Spotify, YouTube</li>
					<li>AI learns your taste and recommends movies, shows, or songs tailored just for you.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🏦 Banking and Finance</h2>
				<ul class="custom-bullets">
					<li>AI detects suspicious transactions, helps with customer service, and even gives savings advice through smart apps.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🏥 Healthcare</h2>
				<ul class="custom-bullets">
					<li>AI assists doctors with diagnosing diseases, reading X-rays, and managing patient records.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🧹 Smart Home Devices</h2>
				<ul class="custom-bullets">
					<li><strong>Example: </strong>Smart bulbs, vacuum robots (like Roomba)</li>
					<li>These use AI to adjust lighting, clean your floors, or learn your preferences automatically.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>💬 Chatbots and Customer Service</h2>
				<ul class="custom-bullets">
					<li>Have you chatted with a support bot? That’s AI understanding your problem and giving fast answers.</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>🤖 Photo Filters and Face Recognition</h2>
				<ul class="custom-bullets">
					<li>Apps like Snapchat or your phone’s camera use AI to detect faces and apply fun filters or unlock the phone.</li>
				</ul>
			</div>

			<div class="section">
				<strong>🔍 Summary:</strong>  
				AI is all around us—helping, suggesting, protecting, and entertaining. It’s not just for scientists anymore. From your pocket to your home, AI is quietly making life easier.
			</div>

			<div class="section">
				<a href="/ai-prompt-writing-guide" class="chapter-link" >
					<h2>➡️ Up Next:</h2>
					<p><strong>Chapter 3: How to write a Prompt (Prompt Writing)</strong></p>
				</a>
			</div>
			
			<div class="section keep-learning" style="margin-top:24px;">
				<h2>Keep Learning</h2>
				<ul class="custom-bullets">
					<li><a href="/ai-prompt-writing-guide">Next: Chapter 3 – How to Write a Prompt</a></li>
					<li><a href="/ai-course">Back to the full AI Course</a></li>
					<li>Related lessons:
						<ul class="custom-bullets">
							<li><a href="/introduction-to-ai-1">Introduction to AI (Chapter 1)</a></li>
							<li><a href="/how-ai-learns-from-data-4">How AI Learns from Data (Chapter 4)</a></li>
							<li><a href="/types-of-ai-tools-and-how-to-use-them-5">Types of AI Tools and How to Use Them (Chapter 5)</a></li>
						</ul>
					</li>
				</ul>
				<a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Subscribe on YouTube</a>
			</div>

			<div class="prev-next-container">
				<a href="/introduction-to-ai-1" class="prev-link">← Previous | Chapter 1</a>
				<a href="/ai-prompt-writing-guide" class="next-link">Chapter 3 | Next →</a>
			</div>

			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Where AI Shows Up in Everyday Life</h2>
				<form id="ai-quiz2-form">
					<ol>
						<li>
							<strong>Which of these is an example of AI in smartphones?</strong><br>
							<input type="radio" name="q1" value="a"> Google Assistant<br>
							<input type="radio" name="q1" value="b"> Calculator<br>
							<input type="radio" name="q1" value="c"> Flashlight<br>
						</li><br>
						<li>
							<strong>How does AI help in online shopping?</strong><br>
							<input type="radio" name="q2" value="a"> Recommends products based on your activity<br>
							<input type="radio" name="q2" value="b"> Changes website color<br>
							<input type="radio" name="q2" value="c"> Slows down the site<br>
						</li><br>
						<li>
							<strong>What do smart home devices use AI for?</strong><br>
							<input type="radio" name="q3" value="a"> Adjust lighting and learn preferences<br>
							<input type="radio" name="q3" value="b"> Only play music<br>
							<input type="radio" name="q3" value="c"> Just display time<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz2()">Submit Answers</button>
					<div id="quiz2-result" style="margin-top: 20px; font-weight: bold;"></div>
				</form>
			</div>
		</div>
		<script>
		function checkQuiz2() {
			const answers = {q1: 'a', q2: 'a', q3: 'a'};
			let score = 0;
			let total = 3;
			let form = document.getElementById('ai-quiz2-form');
			let result = document.getElementById('quiz2-result');
			let userAnswers = {
				q1: form.q1.value,
				q2: form.q2.value,
				q3: form.q3.value
			};
			if (!userAnswers.q1 || !userAnswers.q2 || !userAnswers.q3) {
				result.innerHTML = 'Please answer all questions.';
				return;
			}
			if (userAnswers.q1 === answers.q1) score++;
			if (userAnswers.q2 === answers.q2) score++;
			if (userAnswers.q3 === answers.q3) score++;
			result.innerHTML = `You scored ${score} out of ${total}.`;
			if (score === total) {
				result.innerHTML += ' 🎉 Great job!';
			}

			// Highlight answers and disable inputs
			const correctAnswers = answers;
			['q1','q2','q3'].forEach(function(q, idx) {
				const radios = form[q];
				for (let i = 0; i < radios.length; i++) {
					const label = radios[i].nextSibling;
					if (radios[i].value === correctAnswers[q]) {
						if (label && label.nodeType === 3) {
							const span = document.createElement('span');
							span.textContent = label.textContent;
							span.style.color = 'green';
							label.parentNode.insertBefore(span, label);
							label.parentNode.removeChild(label);
						}
					} else if (radios[i].checked) {
						if (label && label.nodeType === 3) {
							const span = document.createElement('span');
							span.textContent = label.textContent;
							span.style.color = 'red';
							label.parentNode.insertBefore(span, label);
							label.parentNode.removeChild(label);
						}
					}
					radios[i].disabled = true;
				}
			});
			// Disable submit button
			form.querySelector('button[type="button"]').disabled = true;

			// Add Next Chapter button
			if (!document.getElementById('next-chapter-btn')) {
				const nextBtn = document.createElement('a');
				nextBtn.href = '/ai-prompt-writing-guide';
				nextBtn.className = 'btn';
				nextBtn.id = 'next-chapter-btn';
				nextBtn.style = 'background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border-radius: 5px; margin-top: 1.5rem; display: inline-block; font-size: 1rem; text-decoration: none;';
				nextBtn.textContent = 'Next Chapter';
				result.appendChild(document.createElement('br'));
				result.appendChild(nextBtn);
			}

			// Send score to server via AJAX
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'submit_quiz_result.php', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4) {
					try {
						var resp = JSON.parse(xhr.responseText);
						if (resp.success) {
							result.innerHTML += '<br>Score saved!';
						} else {
							result.innerHTML += '<br>Could not save score.';
						}
					} catch (e) {
						result.innerHTML += '<br>Could not save score.';
					}
				}
			};
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=where-ai-shows-up-in-everyday-life-2');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Where AI Shows Up in Everyday Life</h2>
				<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
