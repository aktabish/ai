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
	<title>Types of AI Tools and How to Use Them – Chapter 5 | AI Learner</title>

	<meta name="description" content="Learn about different types of AI tools like ChatGPT, DALL·E, and Teachable Machine. Fun and safe AI tools for kids and beginners with easy activities to try!">
	<meta name="keywords" content="AI tools for kids, free AI tools, how to use AI tools, ChatGPT for students, image AI, voice AI, AI for beginners, teach AI to children, AI learning website" />
	
	<meta property="og:title" content="Types of AI Tools and How to Use Them – Chapter 5 | AI Learner">
	<meta property="og:description" content="Learn about different types of AI tools like ChatGPT, DALL·E, and Teachable Machine. Fun and safe AI tools for kids and beginners with easy activities to try!">
	<meta property="og:url" content="https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">


	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Types of AI Tools and How to Use Them – Chapter 5 | AI Learner">
	<meta name="twitter:description" content="Learn about different types of AI tools like ChatGPT, DALL·E, and Teachable Machine. Fun and safe AI tools for kids and beginners with easy activities to try!">
	<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
	<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "AI Learner",
	  "url": "https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5",
	  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
	}
	</script>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "VideoObject",
	  "name": "Types of AI Tools",
	  "description": "Explore different AI tools and how to use them.",
	  "thumbnailUrl": [
	    "https://img.youtube.com/vi/17RUaBtWJps/hqdefault.jpg"
	  ],
	  "uploadDate": "2025-10-10T12:00:00+05:00",
	  "duration": "PT8M",
	  "embedUrl": "https://www.youtube.com/embed/17RUaBtWJps",
	  "contentUrl": "https://www.youtube.com/watch?v=17RUaBtWJps",
	  "url": "https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5",
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
			"urlTemplate": "https://www.youtube.com/watch?v=17RUaBtWJps"
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
	{"@type":"ListItem","position":3,"name":"Chapter 5: Types of AI Tools and How to Use Them","item":"https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5"}
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
					<li aria-current="page">Chapter 5: Types of AI Tools and How to Use Them</li>
				</ol>
			</nav>
			<h1>🧠 Chapter 5: Types of AI Tools and How to Use Them</h1>
		</div>
	</section>

	<div class="container">
		<div class="section">
			<p>Welcome to Chapter 5! 🎉<br>
			Now that you know how AI learns, let’s explore the <strong>cool tools</strong> that AI gives us — tools that <strong>talk, draw, write, and even help us code!</strong> 😃</p>
		</div>

		<div class="section" aria-labelledby="tools-video">
			<h2 id="tools-video">🎥 Video: Types of AI Tools</h2>
			<p style="margin-top: 4px;">Watch this short video to explore different AI tools and how to use them.</p>
			<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/17RUaBtWJps?si=tnWOnxKpqBMO3urU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
			</div>
		</div>

		<div class="section">
			<h2>🔍 What Are AI Tools?</h2>
			<p>AI tools are apps or websites that use Artificial Intelligence to <strong>help you do tasks faster, smarter, or more creatively</strong>.</p>

			<ul class="custom-bullets">
				<li>Chat with you like a robot friend 🤖</li>
				<li>Draw pictures from your ideas 🎨</li>
				<li>Help you write stories or solve math 📝</li>
				<li>Turn your voice into text, or create cartoons! 🎤🖼️</li>
			</ul>
		</div>

		<div class="section" >
			<h2>🧰 Types of AI Tools</h2>

			<h3>1. 💬 Text-Based AI (Chatbots)</h3>
			<p><strong>Examples:</strong> ChatGPT, Google Bard, Poe<br>
			<strong>What You Can Do:</strong> Ask questions, write poems, get homework help.</p>
		</div>

		<div class="section">
			<h3>2. 🎨 Image-Based AI</h3>
			<p><strong>Examples:</strong> DALL·E, Bing Image Creator, Craiyon<br>
			<strong>What You Can Do:</strong> Create pictures from your imagination.</p>
		</div>
		
		<div class="section">
			<h3>3. 🗣️ Voice AI</h3>
			<p><strong>Examples:</strong> Google Assistant, Siri, Alexa<br>
			<strong>What You Can Do:</strong> Get answers, set reminders, or hear jokes!</p>
		</div>
		
		<div class="section">
			<h3>4. 🎥 Video & Animation AI</h3>
			<p><strong>Examples:</strong> Synthesia, Animaker, HeyGen<br>
			<strong>What You Can Do:</strong> Make videos or animated characters with AI.</p>
		</div>

		<div class="section" >
			<h3>5. 💻 Coding AI</h3>
			<p><strong>Examples:</strong> GitHub Copilot, Replit Ghostwriter<br>
			<strong>What You Can Do:</strong> Get help writing code, build games and apps.</p>
		</div>

		<div class="section">
			<h2>✨ Try These Free AI Tools for Kids and Beginners</h2>

			<table border="1" cellpadding="8" cellspacing="0">
				<tr>
				  <th>Tool Name</th>
				  <th>What It Does</th>
				  <th>Try It</th>
				</tr>
				<tr>
				  <td>ChatGPT</td>
				  <td>Chat with AI for help, stories, and learning</td>
				  <td><a href="https://chat.openai.com" target="_blank">Open ChatGPT</a></td>
				</tr>
				<tr>
				  <td>Bing Image Creator</td>
				  <td>Create images from your words</td>
				  <td><a href="https://www.bing.com/images/create" target="_blank">Try Image Creator</a></td>
				</tr>
				<tr>
				  <td>Teachable Machine</td>
				  <td>Train AI to recognize images or sounds</td>
				  <td><a href="https://teachablemachine.withgoogle.com" target="_blank">Open Teachable Machine</a></td>
				</tr>
				<tr>
				  <td>Canva Magic Write</td>
				  <td>Create AI-generated text for posters</td>
				  <td><a href="https://www.canva.com" target="_blank">Try Canva</a></td>
				</tr>
				<tr>
					<td>Curipod</td>
					<td>Make interactive AI lessons or slides</td>
					<td><a href="https://curipod.com" target="_blank">Visit Curipod</a></td>
				 </tr>
				 <tr>
					<td>Khanmigo</td>
					<td>AI teacher built into Khan Academy</td>
					<td><a href="https://www.khanacademy.org/khan-labs" target="_blank">Try Khanmigo</a></td>
				 </tr>
				 <tr>
					<td>Scribble Diffusion</td>
					<td>Turn doodles into detailed images with AI</td>
					<td><a href="https://scribblediffusion.com" target="_blank">Use Scribble Diffusion</a></td>
				 </tr>
				 <tr>
					<td>Remove.bg</td>
					<td>Remove backgrounds from images with AI</td>
					<td><a href="https://www.remove.bg" target="_blank">Try Remove.bg</a></td>
				 </tr>
				 <tr>
					<td>Tome</td>
					<td>Create beautiful AI-powered presentations</td>
					<td><a href="https://tome.app" target="_blank">Open Tome</a></td>
				 </tr>
				 <tr>
					<td>Pixlr</td>
					<td>Online photo editor with AI tools</td>
					<td><a href="https://pixlr.com" target="_blank">Use Pixlr</a></td>
				 </tr>
			</table>
		</div>
			 
		<div class="section">
		  <h2>🧪 Simple AI Activities</h2>
		  <ul>
			<li>✅ Ask ChatGPT: <em>"Can you write a funny bedtime story about a dragon who loves pizza?"</em></li>
			<li>✅ Try Bing Image Creator: Type <em>"a robot playing cricket"</em> and view your art!</li>
			<li>✅ Open Teachable Machine: Train a model to recognize your smile vs. a frown (ask an adult for help)</li>
		  </ul>
		</div>

		<div class="section">
			<h2>⚠️ AI Safety Tips for Kids</h2>

			<p><strong>Do:</strong></p>
			<ul class="custom-bullets">
				<li>Use tools with an adult’s permission</li>
				<li>Ask questions if you're unsure</li>
				<li>Be respectful when using AI tools</li>
			</ul>

			<p><strong>Don't:</strong></p>
			<ul class="custom-bullets">
				<li>Share personal info like your full name or address</li>
				<li>Use AI to be mean or cheat on homework</li>
				<li>Believe everything AI says — it can be wrong!</li>
		  </ul>
		</div>

		<div class="section">
			<h2>🧠 What's Next?</h2>
			<p>Now you know how to explore and use different AI tools safely and creatively! 🎉<br>
			In the next chapter, we'll help you create your <strong>very own AI project</strong>! Stay curious and keep exploring! 🚀</p>
		</div>
		
		<div class="section">
			<a href="/create-your-first-ai-project-6" class="chapter-link" >
				<h2>➡️ Up Next:</h2>
				<p><strong>Chapter 6: Create Your First AI Project – Step by Step</strong>
			</a>
		</div>
		
		<div class="prev-next-container">
			<a href="/how-ai-learns-from-data-4" class="prev-link">← Previous | Chapter 4</a>
			<a href="/create-your-first-ai-project-6" class="next-link">Chapter 6 | Next →</a>
		</div>
	</div>
	
	<?php
	// MCQ Quiz Section (only for signed-in users)
	if (isset($_SESSION['user_id'])): ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: Types of AI Tools</h2>
			<form id="ai-quiz5-form">
				<ol>
					<li>
						<strong>Which of these is a text-based AI tool?</strong><br>
						<input type="radio" name="q1" value="a"> ChatGPT<br>
						<input type="radio" name="q1" value="b"> DALL·E<br>
						<input type="radio" name="q1" value="c"> Pixlr<br>
					</li><br>
					<li>
						<strong>What can image-based AI tools do?</strong><br>
						<input type="radio" name="q2" value="a"> Create pictures from your ideas<br>
						<input type="radio" name="q2" value="b"> Only play music<br>
						<input type="radio" name="q2" value="c"> Teach math<br>
					</li><br>
					<li>
						<strong>What is an important AI safety tip?</strong><br>
						<input type="radio" name="q3" value="a"> Don't share personal info<br>
						<input type="radio" name="q3" value="b"> Always believe everything AI says<br>
						<input type="radio" name="q3" value="c"> Use AI to cheat on homework<br>
					</li>
				</ol>
				<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz5()">Submit Answers</button>
				<div id="quiz5-result" style="margin-top: 20px; font-weight: bold;"></div>
			</form>
		</div>
	</div>
	<script>
	function checkQuiz5() {
		const answers = {q1: 'a', q2: 'a', q3: 'a'};
		let score = 0;
		let total = 3;
		let form = document.getElementById('ai-quiz5-form');
		let result = document.getElementById('quiz5-result');
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
			nextBtn.href = '/create-your-first-ai-project-6';
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
		xhr.send('score=' + encodeURIComponent(score) + '&chapter=types-of-ai-tools-and-how-to-use-them-5');
	}
	</script>
	<?php else: ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: Types of AI Tools</h2>
			<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
		</div>
	</div>
	<?php endif; ?>
	<?php
		include 'layout/footer.php';
	?>

</body>
</html>
