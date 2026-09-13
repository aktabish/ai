<?php
	session_start();
	/*if (!isset($_SESSION['user_id'])) 
	{
		header("Location: signin");
		exit();
	}*/
	
	include 'db.php';
	include 'page_visit.php';

	// Handle AJAX quiz score submission (kept for compatibility)
	if (isset($_POST['action']) && $_POST['action'] === 'submit_quiz_score') {
	    if (!isset($_SESSION['user_id'])) {
	        echo json_encode(['success' => false, 'error' => 'Not signed in']);
	        exit();
	    }
	    $user_id = intval($_SESSION['user_id']);
	    $score = intval($_POST['score']);
	    $chapter = 'introduction-to-ai-in-chinese';
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
<html lang="zh-CN">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<!-- Page Title -->
		<title>人工智能入门——第1章 | AI Learner</title>

		<!-- SEO Meta Description -->
		<meta name="description" content="开启你的人工智能之旅。用通俗易懂的方式了解什么是AI、核心概念以及它为何重要——适合零基础初学者。">

		<!-- Open Graph (for Facebook, LinkedIn, etc.) -->
		<meta property="og:title" content="人工智能入门——第1章 | AI Learner">
		<meta property="og:description" content="了解人工智能的含义以及它如何改变世界。非常适合没有技术背景的初学者。">
		<meta property="og:url" content="https://ailearner.free.nf/introduction-to-ai-in-chinese">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

		<!-- Twitter Card Meta -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="人工智能入门——第1章 | AI Learner">
		<meta name="twitter:description" content="新手友好的AI入门指南——简单、清晰、非技术化。">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Organization",
		  "name": "AI Learner",
		  "url": "https://ailearner.free.nf/introduction-to-ai-in-chinese",
		  "logo": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "VideoObject",
		  "name": "人工智能入门——儿童向视频",
		  "description": "以简单有趣的方式理解AI基础知识。",
		  "thumbnailUrl": [
		    "https://img.youtube.com/vi/--QaVxL2lnw/hqdefault.jpg"
		  ],
		  "uploadDate": "2025-10-10T12:00:00+05:00",
		  "duration": "PT5M",
		  "embedUrl": "https://www.youtube.com/embed/--QaVxL2lnw",
		  "contentUrl": "https://www.youtube.com/watch?v=--QaVxL2lnw",
		  "url": "https://ailearner.free.nf/introduction-to-ai-in-chinese",
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
		{"@type":"ListItem","position":1,"name":"首页","item":"https://ailearner.free.nf/"},
		{"@type":"ListItem","position":2,"name":"AI课程","item":"https://ailearner.free.nf/ai-course"},
		{"@type":"ListItem","position":3,"name":"第1章：人工智能入门","item":"https://ailearner.free.nf/introduction-to-ai-in-chinese"}
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
						<li><a href="/">首页</a></li>
						<li style="margin:0 6px;">></li>
						<li><a href="/ai-course">AI课程</a></li>
						<li style="margin:0 6px;">></li>
						<li aria-current="page">第1章：人工智能入门</li>
					</ol>
				</nav>
				<h1>第1章：人工智能入门</h1>
			</div>
		</section>

		<div class="container">
			<div class="section" aria-labelledby="kids-video">
				<h2 id="kids-video">🎥 儿童向视频：人工智能入门</h2>
				<p style="margin-top: 4px;">观看这段短视频，用轻松有趣的方式了解AI的基础知识。</p>
				<div class="video-container" style="position:relative; width:100%; max-width:720px; padding-bottom:56.25%; height:0; overflow:hidden; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,.2); background:#000; margin:16px auto;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/--QaVxL2lnw?si=Y6mcs5aLStPh0uAv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;"></iframe>
				</div>
			</div>
			<div class="section">
				<h2>🤖 什么是AI？</h2>
				<p>AI 是 <strong>Artificial Intelligence</strong> 的缩写，即<strong>人工智能</strong>。它让机器具备完成通常需要人类思考的任务的能力——例如学习、理解或做出决策。</p>
				<p>在这些场景中，你可能已经在使用AI：</p>
				<ul class="custom-bullets">
				  <li>在 Google 地图中获取路线</li>
				  <li>在 Netflix 上看到电影推荐</li>
				  <li>使用面容ID解锁手机</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧠 为什么要了解AI？</h2>
				<p>AI 无处不在——在家里、学校、医院和工作场所。理解AI可以帮助你：</p>
				<ul class="custom-bullets">
				  <li>更自信地使用新技术</li>
				  <li>了解决策是如何产生的</li>
				  <li>参与关于AI的讨论</li>
				</ul>
				<p>你不需要会编程——保持好奇就够了！</p>
			</div>

			<div class="section">
				<h2>🧩 AI 能做什么？</h2>
				<p>AI 可以帮助机器：</p>
				<ul class="custom-bullets">
				  <li>从数据中学习</li>
				  <li>理解语音和文本</li>
				  <li>识别图像</li>
				  <li>做出合理的推断或决策</li>
				</ul>
			</div>

			<div class="section">
				<h2>🧱 AI 不能（也不应该）做什么</h2>
				<p>AI 很强大，但并不完美。它：</p>
				<ul class="custom-bullets">
				  <li>不会像人类一样思考或感受</li>
				  <li>如果学习了错误的数据，可能会犯错</li>
				  <li>需要人类进行引导和审查</li>
				</ul>
				<div class="highlight">
				  <strong>伦理很重要：</strong>AI 影响隐私、公平与信任。请始终询问它如何以及为何被使用。
				</div>
			</div>

			<div class="section">
				<h2>🎯 本课程你将学到</h2>
				<ul class="custom-bullets">
				  <li>AI 如何出现在日常生活中</li>
				  <li>人们谈论 AI 时常用的术语</li>
				  <li>如何就 AI 工具提出聪明的问题</li>
				  <li>如何安全且负责任地使用 AI</li>
				</ul>
			</div>

			<div class="section">
				<h2>💬 关键信息</h2>
				<p>你不必成为技术专家。只需理解基础——而你已经开始了。</p>
			</div>

			<div class="section">
				<a href="/where-ai-shows-up-in-everyday-life-2" class="chapter-link" >
					<h2>➡️ 接下来：</h2>
					<p><strong>第2章：AI 在日常生活中的出现</strong></p>
				</a>
			</div>

			<div class="section keep-learning" style="margin-top:24px;">
                <h2>继续学习</h2>
                <ul class="custom-bullets">
                    <li><a href="/where-ai-shows-up-in-everyday-life-2">下一步：第2章——AI 在日常生活中的出现</a></li>
                    <li><a href="/ai-course">返回完整 AI 课程</a></li>
                    <li>相关课程：
                        <ul class="custom-bullets">
                            <li><a href="/ai-prompt-writing-guide">如何编写提示（第3章）</a></li>
                            <li><a href="/how-ai-learns-from-data-4">AI 如何从数据中学习（第4章）</a></li>
                            <li><a href="/types-of-ai-tools-and-how-to-use-them-5">AI 工具的类型及其用法（第5章）</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">订阅 YouTube</a>
            </div>

            <div class="prev-next-container">
				<a href="/ai-course" class="prev-link">← 上一页 | AI 课程</a>
				<a href="/where-ai-shows-up-in-everyday-life-2" class="next-link">第2章 | 下一步 →</a>
			</div>

			<!--a class="btn" href="quiz1">Take Quiz</a-->
		</div>

		<?php
		// MCQ Quiz Section (only for signed-in users)
		if (isset($_SESSION['user_id'])): ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 小测验：人工智能入门</h2>
				<form id="ai-quiz-form">
					<ol>
						<li>
							<strong>AI 的全称是什么？</strong><br>
							<input type="radio" name="q1" value="a"> Artificial Intelligence（人工智能）<br>
							<input type="radio" name="q1" value="b"> Automated Interaction（自动化交互）<br>
							<input type="radio" name="q1" value="c"> Advanced Internet（高级互联网）<br>
						</li><br>
						<li>
							<strong>以下哪一项是 AI 不能做到的？</strong><br>
							<input type="radio" name="q2" value="a"> 从数据中学习<br>
							<input type="radio" name="q2" value="b"> 识别图像<br>
							<input type="radio" name="q2" value="c"> 像人类一样思考和感受<br>
						</li><br>
						<li>
							<strong>为什么理解 AI 很重要？</strong><br>
							<input type="radio" name="q3" value="a"> 可以更自信地使用新技术<br>
							<input type="radio" name="q3" value="b"> 可以参与���于 AI 的讨论<br>
							<input type="radio" name="q3" value="c"> 以上两者皆是<br>
						</li>
					</ol>
					<button type="button" class="btn" style="background-color: #0077c8; color: #fff; padding: .8rem 1.5rem; border: none; border-radius: 5px; margin-top: 1rem; display: inline-block; font-size: 1rem; cursor: pointer;" onclick="checkQuiz()">提交答案</button>
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
				result.innerHTML = '请回答所有问题。';
				return;
			}
			if (userAnswers.q1 === answers.q1) score++;
			if (userAnswers.q2 === answers.q2) score++;
			if (userAnswers.q3 === answers.q3) score++;
			result.innerHTML = `你得了 ${score} 分（共 ${total} 题）。`;
			if (score === total) {
				result.innerHTML += ' 🎉 ��得好！';
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
				nextBtn.textContent = '下一章';
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
							result.innerHTML += '<br>成绩已保存！';
						} else {
							result.innerHTML += '<br>成绩保存失败。';
						}
					} catch (e) {
						result.innerHTML += '<br>成绩保存失败。';
					}
				}
			};
			xhr.send('score=' + encodeURIComponent(score) + '&chapter=introduction-to-ai-in-chinese');
		}
		</script>
		<?php else: ?>
		<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="section">
				<h2>📝 小测验：人工智能入门</h2>
				<p><a href="/signin">登录</a>后即可参加测验并检测你的掌握情况！</p>
			</div>
		</div>
		<?php endif; ?>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
