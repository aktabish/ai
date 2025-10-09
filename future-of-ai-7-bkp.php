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
	<title>The Future of AI – Opportunities and Challenges - Chapter 7 | AI Learner</title>

	<meta name="description" content="Explore the future of Artificial Intelligence including emerging technologies, real-world opportunities, ethical challenges, and global AI regulations in this beginner-friendly chapter.">
	<meta name="keywords" content="Future of AI, Artificial Intelligence, AI challenges, AI opportunities, AI ethics, non-technical AI course, AI learner, chapter 7">
	
	<meta property="og:title" content="The Future of AI – Opportunities and Challenges - Chapter 7 | AI Learner">
	<meta property="og:description" content="Explore the future of Artificial Intelligence including emerging technologies, real-world opportunities, ethical challenges, and global AI regulations in this beginner-friendly chapter.">
	<meta property="og:url" content="https://ailearner.free.nf/future-of-ai-7">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">


	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="The Future of AI – Opportunities and Challenges - Chapter 7 | AI Learner">
	<meta name="twitter:description" content="Explore the future of Artificial Intelligence including emerging technologies, real-world opportunities, ethical challenges, and global AI regulations in this beginner-friendly chapter.">
	<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
	<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "AI Learner",
	  "url": "https://ailearner.free.nf/future-of-ai-7",
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
			<h1>Chapter 7: The Future of AI – Opportunities and Challenges</h1>
			<a href="/">Home</a>
			|
			<a href="/ai-course">All Modules</a>
		</div>
	</section>

	<div class="container">
		<div class="section">
			<p><strong>Objective:</strong> To explore the evolving landscape of artificial intelligence, focusing on future possibilities and the key challenges that lie ahead.</p>
		</div>

		<div class="section">
			<h2>🧠 Emerging AI Technologies</h2>
			<p>AI continues to advance with innovations such as generative AI, robotics, and autonomous systems. These technologies are rapidly changing industries from healthcare to education.</p>
		</div>

		<div class="section" >
			<h2>🛠 Opportunities Ahead</h2>
			<ul class="custom-bullets">
				<li>Enhanced healthcare with early diagnosis and robotic surgeries</li>
				<li>Smart education tools that personalize learning</li>
				<li>Climate modeling and disaster prediction</li>
				<li>Automation in agriculture and logistics</li>
			</ul>
		</div>

		<div class="section">
			<h2>🌍 Ethical and Societal Challenges</h2>
			<ul class="custom-bullets">
				<li>Bias in AI decisions due to poor data</li>
				<li>Job displacement and the changing workforce</li>
				<li>Privacy concerns and data misuse</li>
				<li>Accountability in AI-driven systems</li>
			</ul>
		</div>
		
		<div class="section">
			<h2>🏷️ The Role of Humans</h2>
			<p>AI is a tool, not a replacement for humans. Future success depends on human oversight, collaboration, and creativity in using AI ethically and effectively.</p>
		</div>
		
		<div class="section">
			<h2>📷 Global Perspectives and Regulations</h2>
			<p>Countries are developing laws to ensure safe and fair use of AI. International cooperation is needed to handle global AI impacts.</p>
		</div>

		<div class="bonus">
			<h3>💡 Discussion Prompt</h3>
			<p>What areas of life do you think AI will improve the most in the next 10 years? What risks should we be careful of?</p>
		</div>

		<div class="section">
			<h2>✅ What You Learned</h2>
			<ul class="custom-bullets">
				<li>Explored the latest AI technologies, including generative AI and autonomous systems.</li>
				<li>Identified key opportunities in healthcare, education, agriculture, and climate science.</li>
				<li>Understood ethical and societal challenges such as bias, job displacement, and privacy concerns.</li>
				<li>Recognized the role of humans in ensuring ethical, responsible AI development and use.</li>
				<li>Learned about global efforts and regulations for managing AI's future impact.</li>
		  </ul>
		</div>

		<div class="section">
			<h2>🧠 What's Next?</h2>
			<p>In the next chapter, we'll learn how to Make Your Resume Using ChatGPT 🚀</p>
		</div>
		
		<div class="section">
			<a href="/how-to-make-your-resume-8" class="chapter-link" >
				<h2>➡️ Up Next:</h2>
				<p><strong>Chapter 8: How to Make Your Resume Using ChatGPT</strong>
			</a>
		</div>
		
		<div class="prev-next-container">
			<a href="/create-your-first-ai-project-6" class="prev-link">← Previous | Chapter 6</a>
			<a href="/how-to-make-your-resume-8" class="next-link">Chapter 8 | Next →</a>
		</div>
	</div>
	
	<?php
	// MCQ Quiz Section (only for signed-in users)
	if (isset($_SESSION['user_id'])): ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: The Future of AI</h2>
			<form id="ai-quiz7-form">
				<ol>
					<li>
						<strong>Which is an opportunity AI brings for the future?</strong><br>
						<input type="radio" name="q1" value="a"> Early diagnosis in healthcare<br>
						<input type="radio" name="q1" value="b"> Making pizza<br>
						<input type="radio" name="q1" value="c"> Growing taller<br>
					</li><br>
					<li>
						<strong>What is a challenge with AI?</strong><br>
						<input type="radio" name="q2" value="a"> Bias in decisions due to poor data<br>
						<input type="radio" name="q2" value="b"> It always tells jokes<br>
						<input type="radio" name="q2" value="c"> It can fly<br>
					</li><br>
					<li>
						<strong>Who is responsible for using AI ethically?</strong><br>
						<input type="radio" name="q3" value="a"> Humans<br>
						<input type="radio" name="q3" value="b"> Only robots<br>
						<input type="radio" name="q3" value="c"> No one<br>
					</li>
				</ol>
				<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz7()">Submit Answers</button>
				<div id="quiz7-result" style="margin-top: 20px; font-weight: bold;"></div>
			</form>
		</div>
	</div>
	<script>
	function checkQuiz7() {
		const answers = {q1: 'a', q2: 'a', q3: 'a'};
		let score = 0;
		let total = 3;
		let form = document.getElementById('ai-quiz7-form');
		let result = document.getElementById('quiz7-result');
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
			nextBtn.href = '/how-to-make-your-resume-8';
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
		xhr.send('score=' + encodeURIComponent(score) + '&chapter=future-of-ai-7');
	}
	</script>
	<?php else: ?>
	<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
		<div class="section">
			<h2>📝 Quick Quiz: The Future of AI</h2>
			<p><a href="/signin">Sign in</a> to take the quiz and test your knowledge!</p>
		</div>
	</div>
	<?php endif; ?>
	<?php
		include 'layout/footer.php';
	?>

</body>
</html>
