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
	    $chapter = 'introduction-to-ai-in-russian';
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
<html lang="ru">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<!-- Page Title -->
		<title>Введение в искусственный интеллект — Глава 1 | AI Learner</title>

		<!-- SEO Meta Description -->
		<meta name="description" content="Начните своё путешествие в мир искусственного интеллекта. Узнайте, что такое ИИ, его ключевые идеи и почему это важно — простым языком для начинающих.">

		<!-- Open Graph (for Facebook, LinkedIn, etc.) -->
		<meta property="og:title" content="Введение в искусственный интеллект — Глава 1 | AI Learner">
		<meta property="og:description" content="Поймите, что означает искусственный интеллект и как он меняет мир. Идеально для начинающих без технической подготовки.">
		<meta property="og:url" content="https://ailearner.free.nf/introduction-to-ai-in-russian">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

		<!-- Twitter Card Meta -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Введение в искусственный интеллект — Глава 1 | AI Learner">
		<meta name="twitter:description" content="Руководство для начинающих по пониманию ИИ — просто, понятно и без сложной техники.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/introduction-to-ai-in-russian",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "VideoObject",
		  "name": "Введение в ИИ — видео для детей",
		  "description": "Поймите основы ИИ простым и увлекательным способом.",
		  "thumbnailUrl": [
		    "https://img.youtube.com/vi/--QaVxL2lnw/hqdefault.jpg"
		  ],
		  "uploadDate": "2025-10-10T12:00:00+05:00",
		  "duration": "PT5M",
		  "embedUrl": "https://www.youtube.com/embed/--QaVxL2lnw",
		  "contentUrl": "https://www.youtube.com/watch?v=--QaVxL2lnw",
		  "url": "https://ailearner.free.nf/introduction-to-ai-in-russian",
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
		        "urlTemplate": "https://www.youtube.com/watch?v=--QaVxL2lnw"
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
		{"@type":"ListItem","position":1,"name":"Главная","item":"https://ailearner.free.nf/"},
		{"@type":"ListItem","position":2,"name":"Курс по ИИ","item":"https://ailearner.free.nf/ai-course"},
		{"@type":"ListItem","position":3,"name":"Глава 1: Введение в ИИ","item":"https://ailearner.free.nf/introduction-to-ai-in-russian"}
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
						<li><a href="/">Главная</a></li>
						<li style="margin:0 6px;">></li>
						<li><a href="/ai-course">Курс по ИИ</a></li>
						<li style="margin:0 6px;">></li>
						<li aria-current="page">Глава 1: Введение в ИИ</li>
					</ol>
				</nav>
				<h1>Глава 1: Введение в ИИ</h1>
			</div>
		</section>

		<div class="container">
			<div class="section" aria-labelledby="kids-video">
				<h2 id="kids-video">🎥 Видео для детей: Введение в ИИ</h2>
				<p style="margin-top: 4px;">Посмотрите это короткое видео, чтобы понять основы ИИ простым и наглядным способом.</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/--QaVxL2lnw?si=Y6mcs5aLStPh0uAv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
				<h2>🤖 Что такое ИИ?</h2>
				<p>ИИ — это <strong>искусственный интеллект</strong>. Это означает предоставление машинам способности выполнять задачи, которые обычно требуют человеческого мышления — например, учиться, понимать или принимать решения.</p>
				<p>Вы уже можете пользоваться ИИ, когда:</p>
				<ul class="custom-bullets">
				  <li>Получаете маршруты в Google Maps</li>
				  <li>Видите рекомендации фильмов на Netflix</li>
				  <li>Разблокируете телефон с помощью Face ID</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧠 Зачем разбираться в И��?</h2>
				<p>ИИ повсюду — дома, в школах, больницах и на работе. Понимание ИИ помогает вам:</p>
				<ul class="custom-bullets">
				  <li>Уверенно пользоваться новыми технологиями</li>
				  <li>Понимать, как принимаются решения</li>
				  <li>Участвовать в обсуждении</li>
				</ul>
				<p>Не нужно уметь программировать — достаточно любопытства!</p>
			</div>

			<div class="section">
				<h2>🧩 Что умеет ИИ?</h2>
				<p>ИИ помогает машинам:</p>
				<ul class="custom-bullets">
				  <li>Учиться на данных</li>
				  <li>Понимать речь и текст</li>
				  <li>Распознавать изображения</li>
				  <li>Принимать разумные решения или делать предположения</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧱 Чего ИИ не может (и не должен) делать</h2>
				<p>ИИ мощный — но не идеальный. Он:</p>
				<ul class="custom-bullets">
				  <li>Не думает и не чувствует как человек</li>
				  <li>Может ошибаться, если обучается на плохих данных</li>
				  <li>Нуждается в людях для контроля и проверки</li>
				</ul>
				<div class="highlight">
				  <strong>Этика важна:</strong> ИИ влияет на конфиденциальность, справедливость и доверие. Всегда спрашивайте, как и зачем он используется.
				</div>
			</div>

			<div class="section">
				<h2>🎯 Чему вы научитесь в этом курсе</h2>
				<ul class="custom-bullets">
				  <li>Как ИИ проявляется в повседневной жизни</li>
				  <li>Какие термины чаще всего используют, говоря об ИИ</li>
				  <li>Как задавать грамотные вопросы об инструментах ИИ</li>
				  <li>Как безопасно и ответственно пользоваться ИИ</li>
				</ul>
			</div>

			<div class="section">
				<h2>💬 Главная мысль</h2>
				<p>Не нужно быть техническим экспертом. Достаточно понять основы — и вы уже на пути.</p>
			</div>

			<div class="section">
				<a href="/where-ai-shows-up-in-everyday-life-2" class="chapter-link" >
					<h2>➡️ Далее:</h2>
					<p><strong>Глава 2: Где ИИ встречается в повседневной жизни</strong></p>
				</a>
			</div>

			<div class="section keep-learning" style="margin-top:24px;">
                <h2>Продолжайте обучение</h2>
                <ul class="custom-bullets">
                    <li><a href="/where-ai-shows-up-in-everyday-life-2">Далее: Глава 2 — Где ИИ встречается в повседневной жизни</a></li>
                    <li><a href="/ai-course">Назад к полному курсу по ИИ</a></li>
                    <li>Связанные уроки:
                        <ul class="custom-bullets">
                            <li><a href="/ai-prompt-writing-guide">Как писать запросы (Глава 3)</a></li>
                            <li><a href="/how-ai-learns-from-data-4">Как ИИ учится на данных (Глава 4)</a></li>
                            <li><a href="/types-of-ai-tools-and-how-to-use-them-5">Виды инструментов ИИ и как ими пользоваться (Глава 5)</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Подписаться на YouTube</a>
            </div>

            <div class="prev-next-container">
				<a href="/ai-course" class="prev-link">← Назад | Курс по ИИ</a>
				<a href="/where-ai-shows-up-in-everyday-life-2" class="next-link">Глава 2 | Далее →</a>
			</div>

			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Мини‑викторина: Введение в ИИ</h2>
				<form id="ai-quiz-form">
					<ol>
						<li>
							<strong>Что означает аббревиатура ИИ?</strong><br>
							<input type="radio" name="q1" value="a"> Искусственный интеллект<br>
							<input type="radio" name="q1" value="b"> Автоматизированно�� взаимодействие<br>
							<input type="radio" name="q1" value="c"> Продвинутый интернет<br>
						</li><br>
						<li>
							<strong>Что из ниже перечисленного ИИ НЕ умеет делать?</strong><br>
							<input type="radio" name="q2" value="a"> Учиться на данных<br>
							<input type="radio" name="q2" value="b"> Распознавать изображения<br>
							<input type="radio" name="q2" value="c"> Думать и чувствовать как человек<br>
						</li><br>
						<li>
							<strong>Почему важно понимать ИИ?</strong><br>
							<input type="radio" name="q3" value="a"> Чтобы уверенно пользоваться новой технологией<br>
							<input type="radio" name="q3" value="b"> Чтобы участвовать в общественном обсуждении<br>
							<input type="radio" name="q3" value="c"> И то и другое<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz()">Отправить ответы</button>
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
				result.innerHTML = 'Пожалуйста, ответьте на все вопросы.';
				return;
			}
			if (userAnswers.q1 === answers.q1) score++;
			if (userAnswers.q2 === answers.q2) score++;
			if (userAnswers.q3 === answers.q3) score++;
			result.innerHTML = `Вы набрали ${score} из ${total}.`;
			if (score === total) {
				result.innerHTML += ' 🎉 Отличная работа!';
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
				nextBtn.textContent = 'Следующая глава';
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
							result.innerHTML += '<br>Результат сохранён!';
						} else {
							result.innerHTML += '<br>Не удалось сохранить результат.';
						}
					} catch (e) {
						result.innerHTML += '<br>Не удалось сохранить результат.';
					}
				}
			};
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=introduction-to-ai-in-russian');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 Мини‑викторина: Введение в ИИ</h2>
				<p><a href="/signin">Войдите</a>, чтобы пройти викторину и проверить свои знания!</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
