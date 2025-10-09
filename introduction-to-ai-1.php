<?php
	session_start();
	/*if (!isset($_SESSION['user_id'])) 
	{
		header("Location: signin");
		exit();
	}*/
	
	include 'db.php';
	include 'page_visit.php';

	// Handle AJAX quiz score submission
	if (isset($_POST['action']) && $_POST['action'] === 'submit_quiz_score') {
	    if (!isset($_SESSION['user_id'])) {
	        echo json_encode(['success' => false, 'error' => 'Not signed in']);
	        exit();
	    }
	    $user_id = intval($_SESSION['user_id']);
	    $score = intval($_POST['score']);
	    $chapter = 'introduction-to-ai-1';
	    $stmt = $conn->prepare("INSERT INTO quiz_results (user_id, chapter, score, submitted_at) VALUES (?, ?, ?, NOW())");
	    $stmt->bind_param('isi', $user_id, $chapter, $score);
	    if ($stmt->execute()) {
	        echo json_encode(['success' => true]);
	    } else {
	        echo json_encode(['success' => false, 'error' => $stmt->error]);
	    }
	    exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<!-- Page Title -->
		<title>Introduction to AI – Chapter 1 | AI Learner</title>

		<!-- SEO Meta Description -->
		<meta name="description" content="Start your journey into Artificial Intelligence. Learn what AI is, its core ideas, and why it matters – in simple, beginner-friendly language.">

		<!-- Open Graph (for Facebook, LinkedIn, etc.) -->
		<meta property="og:title" content="Introduction to AI – Chapter 1 | AI Learner">
		<meta property="og:description" content="Understand what Artificial Intelligence means and how it's shaping the world. Ideal for beginners with no tech background.">
		<meta property="og:url" content="https://ailearner.free.nf/introduction-to-ai-1">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

		<!-- Twitter Card Meta -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Introduction to AI – Chapter 1 | AI Learner">
		<meta name="twitter:description" content="Beginner's guide to understanding AI – simple, clear, and non-technical.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/introduction-to-ai-1",
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
		{"@type":"ListItem","position":3,"name":"Chapter 1: Introduction to AI","item":"https://ailearner.free.nf/introduction-to-ai-1"}
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
						<li aria-current="page">Chapter 1: Introduction to AI</li>
					</ol>
				</nav>
				<h1>Chapter 1: Introduction to AI</h1>
			</div>
		</section>

		<div class="container">
			<div class="section" aria-labelledby="kids-video">
				<h2 id="kids-video">🎥 Video for Kids: Introduction to AI</h2>
				<p style="margin-top: 4px;">Watch this short video to understand the basics of AI in a fun and simple way.</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/--QaVxL2lnw?si=Y6mcs5aLStPh0uAv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
				<h2>🤖 What is AI?</h2>
				<p>AI stands for <strong>Artificial Intelligence</strong>. It means giving machines the ability to do tasks that usually need human thinking — like learning, understanding, or making decisions.</p>
				<p>You may already use AI when you:</p>
				<ul class="custom-bullets">
				  <li>Get directions on Google Maps</li>
				  <li>See movie suggestions on Netflix</li>
				  <li>Unlock your phone with Face ID</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧠 Why Should I Care About AI?</h2>
				<p>AI is everywhere — in homes, schools, hospitals, and workplaces. Understanding AI helps you:</p>
				<ul class="custom-bullets">
				  <li>Use new technology confidently</li>
				  <li>Stay informed about how decisions are made</li>
				  <li>Be part of the conversation</li>
				</ul>
				<p>You don’t need to code — just be curious!</p>
			</div>

			<div class="section">
				<h2>🧩 What Can AI Do?</h2>
				<p>AI can help machines:</p>
				<ul class="custom-bullets">
				  <li>Learn from data</li>
				  <li>Understand speech and text</li>
				  <li>Recognize images</li>
				  <li>Make smart guesses or decisions</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧱 What AI Can’t (and Shouldn’t) Do</h2>
				<p>AI is powerful — but not perfect. It:</p>
				<ul class="custom-bullets">
				  <li>Doesn’t think or feel like a human</li>
				  <li>Can make mistakes if it learns from bad data</li>
				  <li>Needs people to guide and review its actions</li>
				</ul>
				<div class="highlight">
				  <strong>Ethics matter:</strong> AI affects privacy, fairness, and trust. Always ask how and why it's used.
				</div>
			</div>

			<div class="section">
				<h2>🎯 What You’ll Learn in This Course</h2>
				<ul class="custom-bullets">
				  <li>How AI fits into daily life</li>
				  <li>The common terms people use when talking about AI</li>
				  <li>How to ask smart questions about AI tools</li>
				  <li>How to use AI safely and responsibly</li>
				</ul>
			</div>

			<div class="section">
				<h2>💬 Key Takeaway</h2>
				<p>You don’t need to be a tech expert. You just need to understand the basics — and you’ve already started.</p>
			</div>

			<div class="section">
				<a href="/where-ai-shows-up-in-everyday-life-2" class="chapter-link" >
					<h2>➡️ Up Next:</h2>
					<p><strong>Chapter 2: Where AI Shows Up in Everyday Life</strong></p>
				</a>
			</div>

			<div class="section keep-learning" style="margin-top:24px;">
                <h2>Keep Learning</h2>
                <ul class="custom-bullets">
                    <li><a href="/where-ai-shows-up-in-everyday-life-2">Next: Chapter 2 – Where AI Shows Up in Everyday Life</a></li>
                    <li><a href="/ai-course">Back to the full AI Course</a></li>
                    <li>Related lessons:
                        <ul class="custom-bullets">
                            <li><a href="/how-to-write-a-prompt-3">How to Write a Prompt (Chapter 3)</a></li>
                            <li><a href="/how-ai-learns-from-data-4">How AI Learns from Data (Chapter 4)</a></li>
                            <li><a href="/types-of-ai-tools-and-how-to-use-them-5">Types of AI Tools and How to Use Them (Chapter 5)</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Subscribe on YouTube</a>
            </div>

            <div class="prev-next-container">
				<a href="/ai-course" class="prev-link">← Previous | AI Course</a>
				<a href="/where-ai-shows-up-in-everyday-life-2" class="next-link">Chapter 2 | Next →</a>
			</div>

			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Introduction to AI</h2>
				<form id="ai-quiz-form">
					<ol>
						<li>
							<strong>What does AI stand for?</strong><br>
							<input type="radio" name="q1" value="a"> Artificial Intelligence<br>
							<input type="radio" name="q1" value="b"> Automated Interaction<br>
							<input type="radio" name="q1" value="c"> Advanced Internet<br>
						</li><br>
						<li>
							<strong>Which of these is NOT something AI can do?</strong><br>
							<input type="radio" name="q2" value="a"> Learn from data<br>
							<input type="radio" name="q2" value="b"> Recognize images<br>
							<input type="radio" name="q2" value="c"> Think and feel like a human<br>
						</li><br>
						<li>
							<strong>Why is it important to understand AI?</strong><br>
							<input type="radio" name="q3" value="a"> To use new technology confidently<br>
							<input type="radio" name="q3" value="b"> To be part of the conversation<br>
							<input type="radio" name="q3" value="c"> Both a and b<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz()">Submit Answers</button>
					<div id="quiz-result" style="margin-top: 20px; font-weight: bold;"></div>
				</form>
			</div>
		</div>
		<script>
		function checkQuiz() {
			const answers = {q1: 'a', q2: 'c', q3: 'c'};
			let score = 0;
			let total = 3;
			let form = document.getElementById('ai-quiz-form');
			let result = document.getElementById('quiz-result');
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
			const correctAnswers = {q1: 'a', q2: 'c', q3: 'c'};
			['q1','q2','q3'].forEach(function(q, idx) {
				const radios = form[q];
				for (let i = 0; i < radios.length; i++) {
					const label = radios[i].nextSibling;
					if (radios[i].value === correctAnswers[q]) {
						if (label && label.nodeType === 3) {
							// wrap correct label in span
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
				nextBtn.href = '/where-ai-shows-up-in-everyday-life-2';
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
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=introduction-to-ai-1');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Quick Quiz: Introduction to AI</h2>
				<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
