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
	<title>What is Islamic AI? | Ethical Artificial Intelligence in Islam - Chapter 12 | AI Learner</title>

	<meta name="description" content="Learn about Islamic AI and Ethical AI through simple concepts. Understand how Artificial Intelligence can be developed and used according to Islamic values like justice, modesty, and honesty.">
	<meta name="keywords" content="AI in cooking, AI in fashion, AI recipes, smart kitchen, virtual try-on, fashion technology, AI for kids, AI learning for beginners, AI for Students, AI Course for Beginners, non-technical AI course, AI learner, chapter 10">
	
	<meta property="og:title" content="What is Islamic AI? | Ethical Artificial Intelligence in Islam - Chapter 12 | AI Learner">
	<meta property="og:description" content="Learn about Islamic AI and Ethical AI through simple concepts. Understand how Artificial Intelligence can be developed and used according to Islamic values like justice, modesty, and honesty.">
	<meta property="og:url" content="https://ailearner.free.nf/islamic-ai-12">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">


	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="What is Islamic AI? | Ethical Artificial Intelligence in Islam - Chapter 12 | AI Learner">
	<meta name="twitter:description" content="Learn about Islamic AI and Ethical AI through simple concepts. Understand how Artificial Intelligence can be developed and used according to Islamic values like justice, modesty, and honesty.">
	<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
	<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
	<script type="application/ld+json">
	{ 
		"@context": "https://schema.org",
		"@type": "Article",
		"headline": "What is Islamic AI? | Ethical Artificial Intelligence in Islam - Chapter 12",
		"description": "Learn how Islamic values like justice and modesty guide ethical use of AI. This article explains Halal AI with real-life examples.",
		"author": { "@type": "Person", "name": "Absar Tabish" },
		"datePublished": "2025-06-26",
		"url": "https://ailearner.free.nf/islamic-ai-12",
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
		{"@type":"ListItem","position":3,"name":"Chapter 12: ✨ What is Islamic AI & Ethical AI?","item":"https://ailearner.free.nf/islamic-ai-12"}
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
					<li aria-current="page">Chapter 12: ✨ What is Islamic AI & Ethical AI?</li>
				</ol>
			</nav>
			<h1>Chapter 12: ✨ What is Islamic AI & Ethical AI?</h1>
		</div>
	</section>

	<div class="container">
		<div class="section">
			<p><strong>A beginner's guide to Artificial Intelligence from an Islamic and ethical perspective.</strong></p>
		</div>

		<div class="section">
		  <h2>🤖 Understanding AI in Simple Words</h2>
		  <p>Artificial Intelligence (AI) refers to machines or programs that can perform tasks like a human — such as understanding language, recognizing images, making decisions, or learning from data.</p>
		</div>

		<div class="section">
		  <h2>🧠 What is Ethical AI?</h2>
		  <p>Ethical AI ensures that technology is used in a way that respects human rights, dignity, and safety. It means:</p>
		  <ul class="custom-bullets">
			<li>✅ Fair and unbiased decision-making</li>
			<li>✅ Protection of privacy and personal data</li>
			<li>❌ No spying, lying, or harmful actions</li>
		  </ul>
		</div>

		<div class="section">
		  <h2>🕌 What Does Islam Say About AI?</h2>
		  <p>Islamic AI is about using technology that aligns with Islamic ethics. It ensures that AI is developed and used in a way that is:</p>
		  <ul class="custom-bullets">
			<li>✅ Halal (permissible)</li>
			<li>✅ Modest and respectful</li>
			<li>✅ Promoting justice, fairness, and education</li>
		  </ul>
		</div>

		<div class="section">
		  <h2>🌟 Key Islamic Values in AI Development</h2>
		  <table border="1" cellpadding="8" cellspacing="0">
			<thead>
			  <tr><th>Islamic Value</th><th>AI Meaning</th></tr>
			</thead>
			<tbody>
			  <tr><td><strong>Justice (Adl)</strong></td><td>AI should treat everyone equally and fairly</td></tr>
			  <tr><td><strong>No Harm (La Darar)</strong></td><td>AI should never be used to harm others or their privacy</td></tr>
			  <tr><td><strong>Modesty (Haya)</strong></td><td>Content generated by AI must respect modesty and dignity</td></tr>
			  <tr><td><strong>Trust (Amanah)</strong></td><td>User data should be protected and not misused</td></tr>
			  <tr><td><strong>Truth (Sidq)</strong></td><td>AI must not be used to spread false information or deepfakes</td></tr>
			</tbody>
		  </table>
		</div>

		<div class="section">
		  <h2>✅ Examples of Halal & Ethical AI</h2>
		  <ul class="custom-bullets">
			<li>📱 Islamic learning apps with AI teachers</li>
			<li>🕋 Prayer time or Qibla direction apps</li>
			<li>🤖 Voice assistants that avoid inappropriate content</li>
			<li>🌐 Platforms that block haram or unethical material</li>
		  </ul>
		</div>

		<div class="section">
		  <h2>⚠️ What AI Must Avoid (Haram Use Cases)</h2>
		  <ul class="custom-bullets">
			<li>❌ Deepfake videos or false representations</li>
			<li>❌ AI used in gambling, haram finance, or spreading hate</li>
			<li>❌ Immodest or sexually suggestive image generation</li>
			<li>❌ AI spying tools that breach privacy and consent</li>
		  </ul>
		</div>

		<div class="section">
		  <h2>📖 Quranic Teaching About Knowledge and Responsibility</h2>
		  <blockquote>
			"Do not follow what you have no ˹sure˺ knowledge of. Indeed, all will be called to account for ˹their˺ hearing, sight, and intellect."<br>
			<em>— Surah Al-Isra (17:36)</em>
		  </blockquote>
		</div>

		<div class="section">
		  <h2>🌍 How Can We Make AI Halal?</h2>
		  <div class="highlight">
			<ul class="custom-bullets">
			  <li>🧠 Use AI only for beneficial and halal purposes</li>
			  <li>🔒 Protect privacy, dignity, and fairness in AI applications</li>
			  <li>🕋 Always ask: "Is this pleasing to Allah?" before creating AI tools</li>
			</ul>
		  </div>
		</div>

		<div class="section">
		  <p><strong>AI Learner</strong> is here to guide you in understanding and building AI that is both smart and ethical. Stay tuned for more resources, videos, and tools for Islamic AI.</p>
		  <p><em>Visit other pages to explore AI for kids, ethical coding, and interactive AI tools!</em></p>
		</div>
	
		<div class="section">
			<h2>🚀 Coming Up Next:</h2>
			<p>🧠In the next chapter, Discover How AI Can Developers and Programmers to become smart and efficient!  🚀</p>
		</div>
		
		<div class="section">
			<a href="/cooking-soon" class="chapter-link" >
				<h2>➡️ Up Next:</h2>
				<p><strong>Chapter 13: AI for Developers</strong>
			</a>
		</div>
		
		<div class="prev-next-container">
			<a href="/cooking-and-fashion-using-ai-11" class="prev-link">← Previous | Chapter 11</a>
			<a href="/ai-for-developers" class="next-link">Chapter 13 | Next →</a>
		</div>
	</div>
	
	<?php
		include 'layout/footer.php';
	?>

</body>
</html>
