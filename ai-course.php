<?php
	session_start();
	include 'db.php';
	include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<title>AI Course for Beginners – Learn AI the Easy Way | AI Learner</title>
		<link rel="canonical" href="https://ailearner.free.nf/ai-course" />
		<meta name="description" content="Start learning AI for free with simple examples and visuals. AI Learner offers beginner-friendly AI courses for kids, students, and non-tech users." />
		<meta name="keywords" content="AI course, artificial intelligence, learn AI, AI for beginners, machine learning, AI online course, easy AI lessons, AI projects, learn AI without coding, AI for kids and students, free AI course">
		<meta name="author" content="AI Learner Team">
		
		<!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
		<meta name="title" property="og:title" content="AI Course for Beginners – Learn AI the Easy Way | AI Learner" >
		<meta property="og:description" content="Start learning AI for free with simple examples and visuals. AI Learner offers beginner-friendly AI courses for kids, students, and non-tech users.">
		<meta property="og:url" content="https://ailearner.free.nf/">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="AI Course for Beginners – Learn AI the Easy Way | AI Learner">
		<meta name="twitter:description" content="Start learning AI for free with simple examples and visuals. AI Learner offers beginner-friendly AI courses for kids, students, and non-tech users.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "Course",
		  "name": "AI Course for Beginners – Start Your AI Journey Today",
		  "description": "A free, step-by-step Artificial Intelligence course designed for kids, students, and non-technical beginners. Learn the basics of AI, machine learning, prompts, and no-code tools — all in simple language with visuals and examples.",
		  "provider": {
			"@type": "Organization",
			"name": "AI Learner",
			"sameAs": "https://ailearner.free.nf"
		  },
		  "url": "https://ailearner.free.nf/ai-course",
		  "educationalCredentialAwarded": "AI Literacy Certificate (Coming Soon)",
		  "inLanguage": "English",
		  "isAccessibleForFree": true,
		  "audience": {
			"@type": "EducationalAudience",
			"educationalRole": ["student", "beginner", "kid", "teacher", "self-learner"]
		  },
		  "creator": {
			"@type": "Organization",
			"name": "AI Learner"
		  },
		  "offers": {
			"@type": "Offer",
			"url": "https://ailearner.free.nf/ai-course",
			"price": "0.00",
			"priceCurrency": "USD",
			"availability": "https://schema.org/InStock",
			"validFrom": "2024-01-01",
			"category": "Artificial Intelligence",
			"eligibleRegion": {
			  "@type": "Place",
			  "name": "Worldwide"
			}
		  },
		  "hasCourseInstance": {
			"@type": "CourseInstance",
			"name": "Self-Paced AI Course for Beginners",
			"courseMode": "online",
			"courseWorkload": "P4H",
			"instructor": {
			  "@type": "Organization",
			  "name": "AI Learner"
			},
			"location": {
			  "@type": "VirtualLocation",
			  "url": "https://ailearner.free.nf/ai-course"
			},
			"startDate": "2024-01-01",
			"endDate": "2025-12-31"
		  }
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "BreadcrumbList",
		  "itemListElement": [
		    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://ailearner.free.nf/"},
		    {"@type": "ListItem", "position": 2, "name": "AI Course", "item": "https://ailearner.free.nf/ai-course"}
		  ]
		}
		</script>
		<style>
		.pulse {
		  font-size: 18px;
		  color: #000;
		  animation: pulse 1.5s infinite;
		}

		@keyframes pulse {
		  0% {
			transform: scale(1);
			opacity: 1;
		  }
		  50% {
			transform: scale(1.1);
			opacity: 0.7;
		  }
		  100% {
			transform: scale(1);
			opacity: 1;
		  }
		}
	  </style>


	</head>
<body>
	<?php
	include 'layout/header.php';
	?>

    <div id="course-pdf">
    <section class="hero">
        <div class="hero-content">
			<nav aria-label="Breadcrumb" class="breadcrumb">
				<ol style="list-style:none;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;padding:0;margin:10px 0;width:100%;text-align:center;">
					<li><a href="/">Home</a></li>
					<li style="margin:0 6px;">></li>
					<li aria-current="page">AI Course</li>
				</ol>
			</nav>
            <h1>AI Course for Beginners – Start Your AI Journey Today</h1>
            <p>Are you curious about Artificial Intelligence but don’t know where to start? This beginner-friendly AI course is designed for students, educators, and curious minds with <strong>no technical background required.</strong></p>
            <a href="/introduction-to-ai-1" class="btn">Get Started</a>
            <a href="/video-lectures" class="btn" style="margin-left:8px; background:#0077c8;">Video Lectures</a>
        </div>
    </section>

	<div class="container">
		<div class="section">
			<h2>Chapters</h2>
			<br>
			<ul class="custom-bullets chapters-list">
				<li><a href="/introduction-to-ai-1" >Chapter 1: <strong>Introduction to AI</strong></a></li>
				<li><a href="/where-ai-shows-up-in-everyday-life-2" >Chapter 2: <strong>Where AI Shows Up in Everyday Life</strong></a></li>
				<li><a href="/how-to-write-a-prompt-3" >Chapter 3: <strong>Prompt Writing – How to write a Prompt</strong></a></li>
				<li><a href="/how-ai-learns-from-data-4" >Chapter 4: <strong>How AI Learns from Data – The Basics</strong></a></li>
				<li><a href="/types-of-ai-tools-and-how-to-use-them-5" >Chapter 5: <strong>Types of AI Tools and How to Use Them</strong></a></li>
				<li><a href="/create-your-first-ai-project-6" >Chapter 6: <strong>Create Your First AI Project – Step by Step</strong></a></li>
				<li><a href="/future-of-ai-7" >Chapter 7: <strong>The Future of AI – Opportunities and Challenges</strong></a></li>
				<li><a href="/how-to-make-your-resume-8" >Chapter 8: <strong>How to Make Your Resume Using ChatGPT – Step-by-Step Guide</strong></a></li>
				<li><a href="/ai-creativity-art-music-storytelling-9" >Chapter 9: <strong>AI & Creativity – Art, Music, and Storytelling</strong></a></li>
				<li><a href="/learn-a-new-language-using-ai-10" >Chapter 10: <strong>Learn a New Language Using AI</strong></a></li>
				<li><a href="/cooking-and-fashion-using-ai-11" >Chapter 11: <strong>Cooking & Fashion Using AI</strong></a></li>
				<li><a href="/islamic-ai-12" >Chapter 12: <strong> What is Islamic AI & Ethical AI</strong></a></li>
				<li><a href="/ai-for-developers" >Chapter 13: <strong> AI For Developers</strong></a></li>
				<li><a href="/ai-for-healthcare" >Chapter 14: <strong> AI in Healthcare</strong></a></li>
				<li><a href="/ai-for-teachers" >Chapter 15: <strong>AI for Teachers</strong></a></li>
				<li><a href="/ai-in-marketing" >Chapter 16: <strong>AI in Marketing</strong></a></li>
				<li><a href="/coming-soon" >Chapter 17: <strong class="pulse">Coming Soon ....</strong></li>
			</ul>
		</div>
	</div>
    </div>
	
	<?php
	include 'layout/footer.php';
	?>
	    </body>
</html>
