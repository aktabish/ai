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
		<title>How AI Learns from Data – Simple Guide for Beginners – Chapter 4 | AI Learner</title>

		<meta name="description" content="Understand how AI learns using simple examples. This beginner-friendly guide explains AI training and data in a way anyone can understand.">
		
		<meta property="og:title" content="How AI Learns from Data – Simple Guide for Beginners – Chapter 4 | AI Learner">
		<meta property="og:description" content="Understand how AI learns using simple examples. This beginner-friendly guide explains AI training and data in a way anyone can understand.">
		<meta property="og:url" content="https://ailearner.free.nf/how-ai-learns-from-data-4">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png"> <!-- Replace with your actual image path -->


		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="How AI Learns from Data – Simple Guide for Beginners – Chapter 4 | AI Learner">
		<meta name="twitter:description" content="Understand how AI learns using simple examples. This beginner-friendly guide explains AI training and data in a way anyone can understand.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/how-ai-learns-from-data-4",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
		</script>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "BreadcrumbList",
	  "itemListElement": [
		{"@type":"ListItem","position":1,"name":"Home","item":"https://ailearner.free.nf/"},
		{"@type":"ListItem","position":2,"name":"AI Course","item":"https://ailearner.free.nf/ai-course"},
		{"@type":"ListItem","position":3,"name":"Chapter 4: How AI Learns from Data – The Basics","item":"https://ailearner.free.nf/how-ai-learns-from-data-4"}
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
						<li aria-current="page">Chapter 4: How AI Learns from Data – The Basics</li>
					</ol>
				</nav>
				<h1>Chapter 4: How AI Learns from Data – The Basics</h1>
			</div>
		</section>

		<div class="container">
			<div class="section" aria-labelledby="data-video">
				<h2 id="data-video">🎥 Video: How AI Learns from Data</h2>
				<p style="margin-top: 4px;">Watch this short video to understand how AI learns from data using simple examples.</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/SEEVKveGk9s?si=shv05Z92eSEnhvfK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
				<p>Ever wondered how AI tools like ChatGPT or Google Assistant "know" what to say? In this chapter, we’ll explain how AI learns to understand and respond — using easy words and real-life examples.</p>
			</div>
			<div class="section">
				<h2>1. What Does "Learning" Mean for AI?</h2>
				<p>AI doesn't have a brain like us. It learns by looking at <strong>lots of data</strong> — text, images, or numbers — and finding patterns. The more examples it sees, the better it becomes at guessing what to do next.</p>

				<p><strong>Example:</strong> If you want an AI to recognize cats, you show it thousands of cat photos. Over time, it learns what “cat features” look like — like pointy ears, whiskers, and tails.</p>
			</div>
			
			<div class="section">
				<h2>2. AI Learning Is Like Teaching a Child</h2>
				<p>Imagine teaching a child the alphabet. You show them "A for Apple," "B for Ball," and so on. They learn by <strong>seeing examples again and again</strong>. AI learns in a similar way — by repetition and pattern recognition.</p>
				<p><strong>Simple Idea:</strong> Data in → Learning happens → Smart results out</p>
			</div>
			
			<div class="section" >
				<h2>3. What Kind of Data Does AI Use?</h2>
				<ul class="custom-bullets">
					<li><strong>Text:</strong> Books, websites, social media posts</li>
					<li><strong>Images:</strong> Photos of people, objects, animals</li>
					<li><strong>Numbers:</strong> Sales, temperatures, ratings</li>
					<li><strong>Audio:</strong> Voice recordings and music</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>4. What Is Training?</h2>
				<p><strong>Training</strong> means showing the AI thousands (or millions) of examples so it can learn to make decisions. After training, it’s ready to give answers or suggestions — just like ChatGPT does when you ask it something.</p>
				<p>Good training = Smart AI<br>  
					Bad or limited training = Confused AI</p>
			</div>
			
			<div class="section">
				<h2>5. Can AI Make Mistakes?</h2>
				<p>Yes! AI only knows what it's been taught. If the data is wrong, incomplete, or biased, the AI might give weird or unfair answers. That's why it's important to use <strong>good quality data</strong> when training AI.</p>
			</div>

			<div class="section">
				<h2>6. AI Doesn’t Think Like Humans</h2>
				<p>AI doesn't have feelings or understanding. It works like a smart calculator — finding the best answer based on patterns in the data it learned from.</p>
				<p><strong>Remember:</strong> AI is smart, but it still needs your guidance and clear prompts.</p>
			</div>

			<div class="section">
				<h2>7. What's Next?</h2>
				<p>Now that you know how AI learns, you're ready to explore how to <strong>build a simple AI project or tool</strong> using these ideas. We'll take that on in the next chapter!</p>
			</div>		

			<div class="section">
				<a href="/types-of-ai-tools-and-how-to-use-them-5" class="chapter-link" >
					<h2>➡️ Up Next:</h2>
					<p><strong>Chapter 5: Types of AI Tools and How to Use Them</strong></p>
				</a>
			</div>
			
			<div class="section keep-learning" style="margin-top:24px;">
				<h2>Keep Learning</h2>
				<ul class="custom-bullets">
					<li><a href="/types-of-ai-tools-and-how-to-use-them-5">Next: Chapter 5 – Types of AI Tools and How to Use Them</a></li>
					<li><a href="/ai-course">Back to the full AI Course</a></li>
					<li>Related lessons:
						<ul class="custom-bullets">
							<li><a href="/introduction-to-ai-1">Introduction to AI (Chapter 1)</a></li>
							<li><a href="/where-ai-shows-up-in-everyday-life-2">Where AI Shows Up in Everyday Life (Chapter 2)</a></li>
							<li><a href="/how-to-write-a-prompt-3">How to Write a Prompt (Chapter 3)</a></li>
						</ul>
					</li>
				</ul>
				<a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Subscribe on YouTube</a>
			</div>

			<div class="prev-next-container">
				<a href="/how-to-write-a-prompt-3" class="prev-link">← Previous | Chapter 3</a>
				<a href="/types-of-ai-tools-and-how-to-use-them-5" class="next-link">Chapter 5 | Next →</a>
			</div>

			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: How AI Learns from Data</h2>
				<form id="ai-quiz4-form">
					<ol>
						<li>
							<strong>How does AI learn?</strong><br>
							<input type="radio" name="q1" value="a"> By looking at lots of data and finding patterns<br>
							<input type="radio" name="q1" value="b"> By guessing randomly<br>
							<input type="radio" name="q1" value="c"> By copying humans exactly<br>
						</li><br>
						<li>
							<strong>What is AI training?</strong><br>
							<input type="radio" name="q2" value="a"> Showing AI many examples so it can learn<br>
							<input type="radio" name="q2" value="b"> Making AI run faster<br>
							<input type="radio" name="q2" value="c"> Teaching AI to feel emotions<br>
						</li><br>
						<li>
							<strong>Why can AI make mistakes?</strong><br>
							<input type="radio" name="q3" value="a"> Because it only knows what it's been taught<br>
							<input type="radio" name="q3" value="b"> Because it can read minds<br>
							<input type="radio" name="q3" value="c"> Because it never uses data<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz4()">Submit Answers</button>
					<div id="quiz4-result" style="margin-top: 20px; font-weight: bold;"></div>
				</form>
			</div>
		</div>
		<script>
		function checkQuiz4() {
			const answers = {q1: 'a', q2: 'a', q3: 'a'};
			let score = 0;
			let total = 3;
			let form = document.getElementById('ai-quiz4-form');
			let result = document.getElementById('quiz4-result');
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
				nextBtn.href = '/types-of-ai-tools-and-how-to-use-them-5';
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
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=how-ai-learns-from-data-4');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: How AI Learns from Data</h2>
				<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
