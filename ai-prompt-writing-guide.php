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
		<title>AI Prompt Writing Guide – Simple Guide for Beginners – Chapter 3 | AI Learner</title>

		<link rel="canonical" href="https://ailearner.free.nf/ai-prompt-writing-guide" />
		<meta name="description" content="AI Prompt Writing Guide: A complete prompt writing guide for beginners. Learn prompt engineering, AI prompt writing, and get the best prompt writing tips, examples, and easy steps for ChatGPT and other AI tools.">
		
		<meta property="og:title" content="AI Prompt Writing Guide – Simple Guide for Beginners – Chapter 3 | AI Learner">
		<meta property="og:description" content="Learn how to write better prompts for ChatGPT and other AI tools. Simple tips and examples for students and beginners.">
		<meta property="og:url" content="https://ailearner.free.nf/ai-prompt-writing-guide">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png"> <!-- Replace with your actual image path -->

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="AI Prompt Writing Guide – Simple Guide for Beginners – Chapter 3 | AI Learner">
		<meta name="twitter:description" content="Step-by-step prompt writing tips for ChatGPT, Bard, and more. Learn AI communication easily.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Article",
		  "mainEntityOfPage": {
		    "@type": "WebPage",
		    "@id": "https://ailearner.free.nf/ai-prompt-writing-guide"
		  },
		  "headline": "AI Prompt Writing Guide – Simple Guide for Beginners – Chapter 3",
		  "description": "Learn how to write clear and effective prompts for AI tools like ChatGPT. A beginner-friendly guide by AI Learner with tips and examples.",
		  "image": "https://ailearner.free.nf/public/images/ailearner-180x180.png",
		  "author": {
		    "@type": "Organization",
		    "name": "AI Learner",
			"url": "https://ailearner.free.nf/ai-prompt-writing-guide"
		  },
		  "publisher": {
		    "@type": "Organization",
		    "name": "AI Learner",
		    "logo": {
		      "@type": "ImageObject",
		      "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		    }
		  },
		  "datePublished": "2025-05-15T12:00:00+05:00",
		  "dateModified": "2025-08-07T12:00:00+05:00"
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "VideoObject",
		  "name": "Prompt Writing Basics",
		  "description": "Learn to write clear prompts to get better results from AI tools.",
		  "thumbnailUrl": [
		    "https://img.youtube.com/vi/QOz0Ia9H6lo/hqdefault.jpg"
		  ],
		  "uploadDate": "2025-10-10T12:00:00+05:00",
		  "duration": "PT7M",
		  "embedUrl": "https://www.youtube.com/embed/QOz0Ia9H6lo",
		  "contentUrl": "https://www.youtube.com/watch?v=QOz0Ia9H6lo",
		  "url": "https://ailearner.free.nf/ai-prompt-writing-guide",
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
		        "urlTemplate": "https://www.youtube.com/watch?v=QOz0Ia9H6lo"
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
		{"@type":"ListItem","position":3,"name":"Chapter 3: Prompt Writing – How to write a Prompt","item":"https://ailearner.free.nf/ai-prompt-writing-guide"}
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
						<li aria-current="page">Chapter 3: AI Prompt Writing Guide</li>
					</ol>
				</nav>
				<h1>Chapter 3: AI Prompt Writing Guide</h1>
			</div>
		</section>

		<div class="container">
			<div class="section prompt-image-section" aria-labelledby="prompt-image">
				<h2 id="prompt-image">🖼️ Visual: Prompt Engineering</h2>
				<style>
					/* Scope styles to this section to avoid affecting other pages */
					.prompt-image-section .hover-zoom {
						position: relative;
						display: block;
						width: min(360px, 90vw); /* smaller by default */
						margin: 16px auto;
						border-radius: 12px;
						overflow: hidden;
						box-shadow: 0 10px 30px rgba(0,0,0,.20);
						transform: scale(.96);
						transition: transform .28s ease, box-shadow .28s ease, filter .28s ease;
						will-change: transform;
					}
					.prompt-image-section .hover-zoom:hover {
						transform: scale(1.20); /* enlarge on hover */
						box-shadow: 0 18px 48px rgba(0,0,0,.28);
					}
					.prompt-image-section .hover-zoom img {
						display: block;
						width: 100%;
						height: auto;
					}
				</style>
				<a class="hover-zoom" href="/public/images/prompt-engineering.png" target="_blank" rel="noopener">
					<img src="/public/images/prompt-engineering.png" alt="Prompt engineering illustration showing how to write effective prompts" loading="lazy">
				</a>
			</div>
			<div class="section">
				<h2>How to Write a Prompt: The Complete Prompt Writing Guide for Beginners</h2>
				<p>Welcome to the ultimate <strong>prompt writing guide</strong> for beginners! If you want to learn <strong>how to write a prompt</strong> for AI tools like ChatGPT, this simple guide will teach you <strong>prompt engineering for beginners</strong>, <strong>AI prompt writing</strong> tips, and provide <strong>prompt examples for beginners</strong>. Discover the <strong>best prompts for AI</strong> and master <strong>writing effective prompts</strong> with easy steps and a basic prompt structure.</p>
				<p>This <strong>prompt writing tutorial for beginners</strong> covers everything you need to know to get started with <strong>prompt engineering</strong> and create powerful prompts for AI. Whether you want to know <strong>how to write a good prompt for ChatGPT</strong> or just need a <strong>simple guide to writing prompts for AI</strong>, you’re in the right place!</p>
			</div>
			<div class="section" aria-labelledby="prompt-video">
				<h2 id="prompt-video">🎥 Video: Prompt Writing Basics</h2>
				<p style="margin-top: 4px;">Watch this short video to learn how to write effective prompts step by step.</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/QOz0Ia9H6lo?si=27tS_vQijKZu634s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy" style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
				<h2>1. What is a Prompt? (Prompt Writing Basics)</h2>
				<p>A <strong>prompt</strong> is the message, question, or instruction you give to an AI like ChatGPT. Learning <strong>how to write a prompt</strong> is the first step in <strong>prompt engineering for beginners</strong>. The better your prompt, the better the AI’s answer. <strong>Prompt writing</strong> is a key skill for anyone using AI tools.</p>
				<p><strong>Prompt Example for Beginners:</strong></p>
				<ul class="custom-bullets">
					<li>Bad Prompt: <em>“Tell me about space.”</em></li>
					<li>Good Prompt: <em>“Explain how the solar system works in simple words for a 12-year-old.”</em></li>
				</ul>
			</div>
			<div class="section">
				<h2>2. Why Prompt Writing Matters (Prompt Engineering for Beginners)</h2>
				<p>Understanding <strong>how to write a prompt</strong> helps you:</p>
				<ul class="custom-bullets">
					<li>Get accurate, clear, and useful answers from AI</li>
					<li>Save time by avoiding confusion</li>
					<li>Use AI for learning, writing, and creative projects</li>
					<li>Master <strong>prompt engineering step by step</strong></li>
				</ul>
			</div>
			<div class="section">
				<h2>3. Prompt Writing Tips: How to Write a Good Prompt for ChatGPT</h2>
				<ul class="custom-bullets">
					<li><strong>Be Specific:</strong> Give details about what you want. (e.g., "Explain photosynthesis in 3 steps for a 10-year-old.")</li>
					<li><strong>Set a Tone:</strong> Ask the AI to answer like a teacher, expert, or friend.</li>
					<li><strong>Mention the Format:</strong> Do you want a list, paragraph, steps, or summary?</li>
					<li><strong>Keep It Clear:</strong> Use simple words and correct spelling.</li>
				</ul>
				<p><strong>Prompt Example for Beginners:</strong>  
				"Write a short story for kids about teamwork using animals as characters."</p>
			</div>
			<div class="section">
				<h2>4. Best Prompts for AI: Prompt Examples for Beginners</h2>
				<ul class="custom-bullets">
					<li><strong>Learning:</strong> “Explain how photosynthesis works in 3 simple steps.”</li>
					<li><strong>Writing:</strong> “Write a blog post about the benefits of learning AI.”</li>
					<li><strong>Creative:</strong> “Generate ideas for a YouTube channel about AI and education.”</li>
					<li><strong>Daily Tasks:</strong> “Create a 3-day meal plan with vegetarian recipes.”</li>
				</ul>
			</div>
			<div class="section">
				<h2>5. Common Prompt Writing Mistakes to Avoid</h2>
				<ul class="custom-bullets">
					<li>Too short or vague prompts</li>
					<li>Using slang or unclear instructions</li>
					<li>Not providing enough context for the AI</li>
					<li>Ignoring the <strong>basic prompt structure</strong></li>
				</ul>
			</div>
			<div class="section">
				<h2>6. Easy Steps to Create Prompts: Prompt Writing Tutorial for Beginners</h2>
				<ol>
					<li>Start with a clear goal (What do you want the AI to do?)</li>
					<li>Be specific and detailed</li>
					<li>Choose the right format (list, paragraph, summary, etc.)</li>
					<li>Set the tone or style if needed</li>
					<li>Review and refine your prompt for clarity</li>
				</ol>
			</div>
			<div class="section">
				<h2>7. Practice Time! Test Your Prompt Writing Skills</h2>
				<p><strong>Try This:</strong>  
				"Make a 5-question quiz for students about how AI works, with answers."</p>
			</div>
			<div class="section">
				<h2>8. Why Prompt Writing Is a Skill for the Future</h2>
				<p>AI is becoming a part of school, work, and daily life. Knowing <strong>how to write a prompt</strong> and <strong>prompt engineering for beginners</strong> is like learning a new language — it helps you do more, faster, and smarter. <strong>Learn prompt engineering step by step</strong> to stay ahead in the AI era.</p>
				<p>Now that you understand <strong>prompt writing</strong>, you're ready to explore even more ways to use AI in your learning and projects. In the next chapter, we'll show you how to use a simple AI tool — step by step!</p>
			</div>
			<div class="section">
				<h2>FAQ: Prompt Writing Guide for Beginners</h2>
				<ul class="custom-bullets">
					<li><strong>What is prompt engineering for beginners?</strong> Prompt engineering is the process of designing and writing effective prompts to get the best results from AI tools like ChatGPT.</li>
					<li><strong>How do I write a good prompt for ChatGPT?</strong> Use clear, specific instructions, set the tone, and mention the format you want. See our tips above for more details.</li>
					<li><strong>What are the best prompts for AI?</strong> The best prompts are specific, clear, and provide enough context for the AI to understand your request.</li>
					<li><strong>Can beginners learn prompt engineering step by step?</strong> Yes! Follow this guide for easy steps to create prompts and improve your AI results.</li>
				</ul>
			</div>
			<div class="section">
				<h2>Summary: Simple Guide to Writing Prompts for AI</h2>
				<p>This page is your complete <strong>prompt writing guide</strong> for beginners. You’ve learned <strong>how to write a prompt</strong>, seen <strong>prompt examples for beginners</strong>, and discovered <strong>easy steps to create prompts</strong> for ChatGPT and other AI tools. Keep practicing <strong>prompt engineering</strong> and use these <strong>prompt writing tips</strong> to get the best results from AI!</p>
			</div>
			<div class="section">
				<a href="/how-ai-learns-from-data-4" class="chapter-link" >
					<h2>➡️ Up Next:</h2>
					<p><strong>Chapter 4: How AI Learns from Data – The Basics</strong></p>
				</a>
			</div>
			<div class="section keep-learning" style="margin-top:24px;">
				<h2>Keep Learning</h2>
				<ul class="custom-bullets">
					<li><a href="/how-ai-learns-from-data-4">Next: Chapter 4 – How AI Learns from Data</a></li>
					<li><a href="/ai-course">Back to the full AI Course</a></li>
					<li>Related lessons:
						<ul class="custom-bullets">
							<li><a href="/introduction-to-ai-1">Introduction to AI (Chapter 1)</a></li>
							<li><a href="/where-ai-shows-up-in-everyday-life-2">Where AI Shows Up in Everyday Life (Chapter 2)</a></li>
							<li><a href="/types-of-ai-tools-and-how-to-use-them-5">Types of AI Tools and How to Use Them (Chapter 5)</a></li>
						</ul>
					</li>
				</ul>
				<a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Subscribe on YouTube</a>
			</div>

			<div class="prev-next-container">
				<a href="/where-ai-shows-up-in-everyday-life-2" class="prev-link">← Previous | Chapter 2</a>
				<a href="/how-ai-learns-from-data-4" class="next-link">Chapter 4 | Next →</a>
			</div>
			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Prompt Writing</h2>
				<form id="ai-quiz3-form">
					<ol>
						<li>
							<strong>What is a prompt?</strong><br>
							<input type="radio" name="q1" value="a"> A message or question you type to talk to an AI<br>
							<input type="radio" name="q1" value="b"> A computer virus<br>
							<input type="radio" name="q1" value="c"> A type of robot<br>
						</li><br>
						<li>
							<strong>Which is a tip for writing better prompts?</strong><br>
							<input type="radio" name="q2" value="a"> Be specific and clear<br>
							<input type="radio" name="q2" value="b"> Use slang<br>
							<input type="radio" name="q2" value="c"> Make it as short as possible<br>
						</li><br>
						<li>
							<strong>Why is prompt writing important?</strong><br>
							<input type="radio" name="q3" value="a"> It helps get accurate and clear answers from AI<br>
							<input type="radio" name="q3" value="b"> It confuses the AI<br>
							<input type="radio" name="q3" value="c"> It makes the AI slower<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz3()">Submit Answers</button>
					<div id="quiz3-result" style="margin-top: 20px; font-weight: bold;"></div>
				</form>
			</div>
		</div>
		<script>
		function checkQuiz3() {
			const answers = {q1: 'a', q2: 'a', q3: 'a'};
			let score = 0;
			let total = 3;
			let form = document.getElementById('ai-quiz3-form');
			let result = document.getElementById('quiz3-result');
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
				nextBtn.href = '/how-ai-learns-from-data-4';
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
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=ai-prompt-writing-guide');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Prompt Writing</h2>
				<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
