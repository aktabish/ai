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
	<title>Create Your First AI Project – Step by Step AI Guide for Beginners | AI Learner</title>

	<link rel="canonical" href="https://ailearner.free.nf/create-your-first-ai-project-6" />
	<meta name="description" content="Create your first AI project with this step-by-step AI guide for beginners. Learn how to build an AI project from scratch, get simple AI project tutorials, beginner AI project ideas, and easy AI project steps. Perfect for students and anyone getting started with AI!">
	<meta name="keywords" content="create your first AI project, AI project for beginners, step-by-step AI guide, how to build an AI project, simple AI project tutorial, beginner AI project ideas, learn AI project development, start AI project from scratch, easy AI project steps, basic artificial intelligence project, build AI model for beginners, AI coding tutorial, AI programming for students, getting started with AI, hands-on AI project">
	
	<meta property="og:title" content="Create Your First AI Project – Step by Step AI Guide for Beginners | AI Learner">
	<meta property="og:description" content="Create your first AI project with this step-by-step AI guide for beginners. Learn how to build an AI project from scratch, get simple AI project tutorials, beginner AI project ideas, and easy AI project steps. Perfect for students and anyone getting started with AI!">
	<meta property="og:url" content="https://ailearner.free.nf/create-your-first-ai-project-6">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Create Your First AI Project – Step by Step AI Guide for Beginners | AI Learner">
	<meta name="twitter:description" content="Create your first AI project with this step-by-step AI guide for beginners. Learn how to build an AI project from scratch, get simple AI project tutorials, beginner AI project ideas, and easy AI project steps. Perfect for students and anyone getting started with AI!">
	<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
	<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "AI Learner",
	  "url": "https://ailearner.free.nf/create-your-first-ai-project-6",
	  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
	}
	</script>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "VideoObject",
	  "name": "Create Your First AI Project – Step by Step",
	  "description": "Build your first AI project step-by-step, perfect for beginners.",
	  "thumbnailUrl": [
	    "https://img.youtube.com/vi/YmLLBIdH2DI/hqdefault.jpg"
	  ],
	  "uploadDate": "2025-10-10T12:00:00+05:00",
	  "duration": "PT9M",
	  "embedUrl": "https://www.youtube.com/embed/YmLLBIdH2DI",
	  "contentUrl": "https://www.youtube.com/watch?v=YmLLBIdH2DI",
	  "url": "https://ailearner.free.nf/create-your-first-ai-project-6",
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
	        "urlTemplate": "https://www.youtube.com/watch?v=YmLLBIdH2DI"
	      }
	    ]
	  }
	}
	</script>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Article",
	  "mainEntityOfPage": {
	    "@type": "WebPage",
	    "@id": "https://ailearner.free.nf/create-your-first-ai-project-6"
	  },
	  "headline": "Create Your First AI Project – Step by Step AI Guide for Beginners",
	  "description": "Create your first AI project with this step-by-step AI guide for beginners. Learn how to build an AI project from scratch, get simple AI project tutorials, beginner AI project ideas, and easy AI project steps. Perfect for students and anyone getting started with AI!",
	  "image": "https://ailearner.free.nf/public/images/ailearner-180x180.png",
	  "author": {
	    "@type": "Organization",
	    "name": "AI Learner"
	  },
	  "publisher": {
	    "@type": "Organization",
	    "name": "AI Learner",
	    "logo": {
	      "@type": "ImageObject",
	      "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
	    }
	  },
	  "datePublished": "2025-05-20T12:00:00+05:00",
	  "dateModified": "2025-08-07T12:00:00+05:00"
	}
	</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type":"ListItem","position":1,"name":"Home","item":"https://ailearner.free.nf/"},
    {"@type":"ListItem","position":2,"name":"AI Course","item":"https://ailearner.free.nf/ai-course"},
    {"@type":"ListItem","position":3,"name":"🧠 Chapter 6: Create Your First AI Project – Step by Step","item":"https://ailearner.free.nf/create-your-first-ai-project-6"}
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
					<li aria-current="page">🧠 Chapter 6: Create Your First AI Project – Step by Step</li>
				</ol>
			</nav>
			<h1>🧠 Chapter 6: Create Your First AI Project – Step by Step</h1>
		</div>
	</section>

	<div class="container">
	<div class="section">
	<h2>Create Your First AI Project: Step-by-Step AI Guide for Beginners</h2>
	<p>Welcome to your <strong>step-by-step AI guide</strong>! In this tutorial, you’ll learn <strong>how to build an AI project</strong> from scratch, even if you’re a complete beginner. This <strong>simple AI project tutorial</strong> is perfect for students, teachers, and anyone interested in <strong>AI project for beginners</strong>. Get ready for <strong>hands-on AI project</strong> experience and discover <strong>easy AI project steps</strong> to create your first AI model.</p>
	<p>By following this <strong>AI coding tutorial</strong>, you’ll learn <strong>AI programming for students</strong>, <strong>basic artificial intelligence project</strong> structure, and <strong>beginner AI project ideas</strong> to help you get started with AI project development.</p>
	</div>
	<div class="section" aria-labelledby="video-create-project">
		<h2 id="video-create-project">🎥 Video: Create Your First AI Project</h2>
		<p style="margin-top: 4px;">Watch this short video to learn how to build your first AI project step-by-step.</p>
		<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/YmLLBIdH2DI?si=S5FKAeaku_ZlB3oJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
		</div>
	</div>
	<div class="section">
	<h2>🧠 What Will You Create? (Beginner AI Project Ideas)</h2>
	<p>In this <strong>beginner AI project</strong>, you’ll teach your computer to recognize images or actions using your webcam. For example:</p>
	<div class="example">😊 Happy face vs. 😢 Sad face</div>
	<div class="example">📚 Book vs. 🖊️ Pen vs. 🧴 Bottle</div>
	</div>
	<div class="section" >
	<h2>🛠 What You’ll Need to Start AI Project from Scratch</h2>
	<ul class="custom-bullets">
	<li>A computer or laptop</li>
	<li>A web browser (like Chrome)</li>
	<li>A webcam</li>
	<li>Your creativity!</li>
	</ul>
	</div>
	<div class="section">
	<h3>🌍 Step 1: Open Teachable Machine (Easy AI Project Step)</h3>
	<ol class="custom-bullets">
	<li>Go to <a href="https://teachablemachine.withgoogle.com" target="_blank">Teachable Machine</a></li>
	<li>Click "Get Started"</li>
	<li>Select "Image Project" → then “Standard image model”</li>
	</ol>
	</div>
	<div class="section">
	<h3>🏷️ Step 2: Create Your Classes (AI Project for Beginners)</h3>
	<p>Give your <strong>AI project</strong> some classes (like categories).</p>
	<ul class="custom-bullets">
	<li>Class 1: Happy Face</li>
	<li>Class 2: Sad Face</li>
	<li>Click "Add a Class" to add more</li>
	</ul>
	</div>
	<div class="section">
	<h3>📷 Step 3: Train Your AI Model for Beginners</h3>
	<p>Take pictures with your webcam for each class (20–30 is great). Then click <strong>“Train Model”</strong> to teach your AI! This is a <strong>hands-on AI project</strong> step that shows you <strong>how to build an AI project</strong> easily.</p>
	</div>
	<div class="section" >
	<h3>🧪 Step 4: Test Your AI Project</h3>
	<p>Go to the Preview area and try showing objects or faces to the webcam. See your AI guess what it sees! This is a fun way to <strong>learn AI project development</strong>.</p>
	</div>
	<div class="section">
	<h2>💾 Step 5: Save or Share Your AI Project</h2>
	<p>You can export your model or share the link with others. <strong>Getting started with AI</strong> is easy when you follow these steps!</p>
	</div>
	<div class="section">
	<h2>🎨 Fun Beginner AI Project Ideas to Try</h2>
	<ul class="custom-bullets">
	<li>✋ Different hand signs</li>
	<li>🕺 Dance moves</li>
	<li>🧹 Clean vs. messy room</li>
	</ul>
	</div>
	<div class="tip">
	<strong>Tip:</strong> AI learns from examples — the more clear images you give, the better it performs! This is the secret to a <strong>basic artificial intelligence project</strong>.</div>
	<div class="section">
	<h2>✅ What You Learned: AI Programming for Students</h2>
	<ul class="custom-bullets">
	<li>You used a real AI tool</li>
	<li>You trained an AI with your own data</li>
	<li>You made a working AI project — awesome job!</li>
	</ul>
	</div>
	<div class="section">
	<h2>🌍 Try this Example: Hands-on AI Project</h2>
	<ul class="custom-bullets">
	<li><a href="https://teachablemachine.withgoogle.com/models/_qiXIyDOd/" target="_blank"> Mood Recogniser </a></li>
	</ul>
	</div>
	<div class="section">
	<h2>FAQ: Getting Started with AI Project Development</h2>
	<ul class="custom-bullets">
	<li><strong>How do I create my first AI project?</strong> Follow the step-by-step AI guide above to build your first AI project from scratch using Teachable Machine.</li>
	<li><strong>What are some beginner AI project ideas?</strong> Try recognizing emotions, objects, or hand signs using your webcam and AI model.</li>
	<li><strong>Is this AI project tutorial suitable for students?</strong> Yes! This AI coding tutorial is designed for students and anyone new to AI programming.</li>
	<li><strong>What do I need to start an AI project?</strong> Just a computer, browser, webcam, and your creativity!</li>
	</ul>
	</div>
	<div class="section">
	<h2>Summary: Build AI Model for Beginners</h2>
	<p>This page is your complete <strong>AI project for beginners</strong> guide. You’ve learned <strong>how to build an AI project</strong>, seen <strong>easy AI project steps</strong>, and discovered <strong>hands-on AI project</strong> ideas. Keep practicing <strong>AI programming for students</strong> and use these tips to start your own <strong>basic artificial intelligence project</strong> today!</p>
	</div>
	<div class="section">
	<h2>🧠 What's Next?</h2>
	<p>In the next chapter, we'll learn about the Future of AI - Opportunities and Challenges 🚀</p>
	</div>
	<div class="section">
	<a href="/future-of-ai-7" class="chapter-link" >
	<h2>➡️ Up Next:</h2>
	<p><strong>Chapter 7: The Future of AI – Opportunities and Challenges</strong>
	</a>
	</div>
	<div class="prev-next-container">
	<a href="/types-of-ai-tools-and-how-to-use-them-5" class="prev-link">← Previous | Chapter 5</a>
	<a href="/future-of-ai-7" class="next-link">Chapter 7 | Next →</a>
	</div>
	</div>
	
	<?php
	// MCQ Quiz Section (only for signed-in users)
	if (isset($_SESSION['user_id'])): ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: Create Your First AI Project</h2>
			<form id="ai-quiz6-form">
				<ol>
					<li>
						<strong>What tool is used in this chapter to create your first AI project?</strong><br>
						<input type="radio" name="q1" value="a"> Teachable Machine<br>
						<input type="radio" name="q1" value="b"> ChatGPT<br>
						<input type="radio" name="q1" value="c"> Bing Image Creator<br>
					</li><br>
					<li>
						<strong>What do you need to train your AI model?</strong><br>
						<input type="radio" name="q2" value="a"> Clear images for each class<br>
						<input type="radio" name="q2" value="b"> Only text<br>
						<input type="radio" name="q2" value="c"> A calculator<br>
					</li><br>
					<li>
						<strong>What happens after you train your model?</strong><br>
						<input type="radio" name="q3" value="a"> You can test it to see if it recognizes objects or faces<br>
						<input type="radio" name="q3" value="b"> It disappears<br>
						<input type="radio" name="q3" value="c"> It writes a story<br>
					</li>
				</ol>
				<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz6()">Submit Answers</button>
				<div id="quiz6-result" style="margin-top: 20px; font-weight: bold;"></div>
			</form>
		</div>
	</div>
	<script>
	function checkQuiz6() {
		const answers = {q1: 'a', q2: 'a', q3: 'a'};
		let score = 0;
		let total = 3;
		let form = document.getElementById('ai-quiz6-form');
		let result = document.getElementById('quiz6-result');
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
			nextBtn.href = '/future-of-ai-7';
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
		xhr.send('score=' + encodeURIComponent(score) + '&chapter=create-your-first-ai-project-6');
	}
	</script>
	<?php else: ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: Create Your First AI Project</h2>
			<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
		</div>
	</div>
	<?php endif; ?>
	<?php
		include 'layout/footer.php';
	?>

</body>
</html>
