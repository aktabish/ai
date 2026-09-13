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
		<title>How to Write a Prompt – Simple Guide for Beginners – Chapter 3 | AI Learner</title>

		<meta name="description" content="Learn how to write clear and effective prompts for AI tools like ChatGPT. A beginner-friendly guide by AI Learner with tips and examples.">
		
		<meta property="og:title" content="How to Write a Prompt – Simple Guide for Beginners – Chapter 3 | AI Learner">
		<meta property="og:description" content="Learn how to write better prompts for ChatGPT and other AI tools. Simple tips and examples for students and beginners.">
		<meta property="og:url" content="https://ailearner.free.nf/ai-prompt-writing-guide">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png"> <!-- Replace with your actual image path -->


		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="How to Write a Prompt – Simple Guide for Beginners – Chapter 3 | AI Learner">
		<meta name="twitter:description" content="Step-by-step prompt writing tips for ChatGPT, Bard, and more. Learn AI communication easily.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/ai-prompt-writing-guide",
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
				<h1>Chapter 3: Prompt Writing – How to write a Prompt</h1>
				<a href="/">Home</a>
				|
				<a href="/ai-course">All Modules</a>
			</div>
		</section>

		<div class="container">
			<div class="section">
				<p>In this chapter, you'll learn what a <strong>prompt</strong> is and how to write good ones to get better answers from AI tools like ChatGPT, Google Bard, or other chatbots. No tech skills are needed — just simple tips anyone can follow.</p>
			</div>
			<div class="section">
				<h2>1. What is a Prompt?</h2>
				<p>A <strong>prompt</strong> is the message or question you type to talk to an AI. It can be a sentence, a question, or a set of instructions. The better your prompt, the better the AI’s answer.</p>

				<p><strong>Example:</strong></p>
				<ul class="custom-bullets">
					<li>Bad Prompt: <em>“Tell me about space.”</em></li>
					<li>Good Prompt: <em>“Explain how the solar system works in simple words for a 12-year-old.”</em></li>
				</ul>
			</div>
			
			<div class="section">
				<h2>2. Why Prompt Writing Matters</h2>
				<p>Writing a good prompt helps you:</p>
				<ul class="custom-bullets">
					<li>Get accurate and clear answers</li>
					<li>Save time by avoiding confusion</li>
					<li>Use AI for learning, writing, and creating</li>
				</ul>
			</div>
			
			<div class="section" >
				<h2>3. Tips for Writing Better Prompts</h2>
			  <ul class="custom-bullets">
				<li><strong>Be Specific:</strong> Give details about what you want.</li>
				<li><strong>Set a Tone:</strong> Ask the AI to answer like a teacher, friend, or expert.</li>
				<li><strong>Mention the Format:</strong> Do you want a list, paragraph, steps, or a summary?</li>
				<li><strong>Keep It Clear:</strong> Use simple words and correct spelling.</li>
			  </ul>
			  <p><strong>Example Prompt:</strong>  
				"Write a short story for kids about teamwork using animals as characters."</p>
			</div>
			
			<div class="section">
				<h2>4. Types of Prompts You Can Try</h2>
				<ul class="custom-bullets">
					<li><strong>Learning:</strong> “Explain how photosynthesis works in 3 simple steps.”</li>
					<li><strong>Writing:</strong> “Write a blog post about the benefits of learning AI.”</li>
					<li><strong>Creative:</strong> “Generate ideas for a YouTube channel about AI and education.”</li>
					<li><strong>Daily Tasks:</strong> “Create a 3-day meal plan with vegetarian recipes.”</li>
				</ul>
			</div>
			
			<div class="section">
				<h2>5. Common Mistakes to Avoid</h2>
				<ul class="custom-bullets">
					<li>Too short or vague prompts</li>
					<li>Using slang or unclear instructions</li>
					<li>Expecting the AI to know exactly what you mean without enough context</li>
				</ul>
			</div>

			<div class="section">
				<h2>6. Practice Time!</h2>
				<p><strong>Try This:</strong>  
				"Make a 5-question quiz for students about how AI works, with answers."</p>
			</div>

			<div class="section">
				<h2>7. Why Prompt Writing Is a Skill for the Future</h2>
				<p>AI is becoming a part of school, work, and daily life. Knowing how to give good instructions to AI is like learning a new language — it helps you do more, faster, and smarter.</p>

				<p>Now that you understand prompt writing, you're ready to explore even more fun ways to use AI in your learning and projects. In the next chapter, we'll show you how use a simple AI tool — step by step!</p>
			</div>
						

			<div class="section">
				<a href="/how-ai-learns-from-data-4" class="chapter-link" >
					<h2>➡️ Up Next:</h2>
					<p><strong>Chapter 4: How AI Learns from Data – The Basics</strong></p>
				</a>
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
