<?php
	session_start();
	include 'db.php';
	include 'page_visit.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'layout/head.php'; ?>
		<title>AI Course Video Lectures – Free Artificial Intelligence Lessons for Beginners | AI Learner</title>
		<link rel="canonical" href="https://ailearner.free.nf/video-lectures" />
		<meta name="description" content="Watch free AI course videos for beginners: Introduction to AI, AI in everyday life, and prompt engineering tutorials. Learn Artificial Intelligence online with beginner-friendly video lectures and lessons." />

		<meta property="og:title" content="Video Lectures – AI Course | AI Learner">
		<meta property="og:description" content="All the AI Learner course videos in one place – watch and learn step by step.">
		<meta property="og:url" content="https://ailearner.free.nf/video-lectures">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Video Lectures – AI Course | AI Learner">
		<meta name="twitter:description" content="All the AI Learner course videos in one place – watch and learn step by step.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-180x180.png">
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		
		<!-- Structured Data: WebPage + ItemList + VideoObject for each video -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "WebPage",
		  "name": "AI Course Video Lectures",
		  "url": "https://ailearner.free.nf/video-lectures",
		  "description": "Watch free AI course videos for beginners: Introduction to AI, AI in everyday life, and prompt engineering tutorials.",
		  "thumbnailUrl": "https://ailearner.free.nf/public/images/ailearner-180x180.png",
		  "inLanguage": "en",
		  "isPartOf": {"@type": "WebSite", "name": "AI Learner", "url": "https://ailearner.free.nf"},
		  "primaryImageOfPage": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"},
		  "mainEntity": {
		    "@type": "ItemList",
		    "name": "AI Course Video Lectures",
		    "itemListOrder": "http://schema.org/ItemListOrderAscending",
		    "numberOfItems": 6,
		    "itemListElement": [
		      { "@type": "ListItem", "position": 1, "url": "https://ailearner.free.nf/introduction-to-ai-1", "name": "Introduction to AI – Video Lecture" },
		      { "@type": "ListItem", "position": 2, "url": "https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2", "name": "Where AI Shows Up in Everyday Life – Video Lecture" },
		      { "@type": "ListItem", "position": 3, "url": "https://ailearner.free.nf/ai-prompt-writing-guide", "name": "Prompt Writing – How to Write a Prompt – Video Lecture" },
		      { "@type": "ListItem", "position": 4, "url": "https://ailearner.free.nf/how-ai-learns-from-data-4", "name": "How AI Learns from Data – Video Lecture" },
		      { "@type": "ListItem", "position": 5, "url": "https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5", "name": "Types of AI Tools – Video Lecture" },
		      { "@type": "ListItem", "position": 6, "url": "https://ailearner.free.nf/create-your-first-ai-project-6", "name": "Create Your First AI Project – Video Lecture" }
		    ]
		  },
		  "hasPart": [
		    {
		      "@type": "VideoObject",
		      "name": "Introduction to AI – Video for Kids",
		      "description": "Understand the basics of AI in a simple and fun way.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/--QaVxL2lnw/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/--QaVxL2lnw",
		      "url": "https://ailearner.free.nf/introduction-to-ai-1",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT5M"
		    },
		    {
		      "@type": "VideoObject",
		      "name": "Where AI Shows Up in Everyday Life",
		      "description": "See real-life examples of AI at home, school, and work.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/JK6VMNbTX0Q/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/JK6VMNbTX0Q",
		      "url": "https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT6M"
		    },
		    {
		      "@type": "VideoObject",
		      "name": "Prompt Writing Basics",
		      "description": "Learn to write clear prompts to get better results from AI tools.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/QOz0Ia9H6lo/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/QOz0Ia9H6lo",
		      "url": "https://ailearner.free.nf/ai-prompt-writing-guide",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT7M"
		    },
		    {
		      "@type": "VideoObject",
		      "name": "How AI Learns from Data",
		      "description": "Understand how AI models learn from examples during training.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/SEEVKveGk9s/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/SEEVKveGk9s",
		      "url": "https://ailearner.free.nf/how-ai-learns-from-data-4",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT6M"
		    },
		    {
		      "@type": "VideoObject",
		      "name": "Types of AI Tools",
		      "description": "Explore different AI tools and how to use them.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/17RUaBtWJps/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/17RUaBtWJps",
		      "url": "https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT8M"
		    },
		    {
		      "@type": "VideoObject",
		      "name": "Create Your First AI Project – Step by Step",
		      "description": "Build your first AI project step-by-step, perfect for beginners.",
		      "thumbnailUrl": ["https://img.youtube.com/vi/YmLLBIdH2DI/hqdefault.jpg"],
		      "uploadDate": "2025-10-10T12:00:00+05:00",
		      "embedUrl": "https://www.youtube.com/embed/YmLLBIdH2DI",
		      "url": "https://ailearner.free.nf/create-your-first-ai-project-6",
		      "publisher": {"@type": "Organization", "name": "AI Learner", "logo": {"@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"}},
		      "duration": "PT9M"
		    }
		  ]
		}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "FAQPage",
		  "mainEntity": [
		    {
		      "@type": "Question",
		      "name": "Is there a free AI course with video lectures?",
		      "acceptedAnswer": { "@type": "Answer", "text": "Yes. AI Learner offers a free Artificial Intelligence course with beginner-friendly video lectures you can watch online without signing up." }
		    },
		    {
		      "@type": "Question",
		      "name": "How can beginners learn Artificial Intelligence online?",
		      "acceptedAnswer": { "@type": "Answer", "text": "Start with our AI basics videos: Introduction to AI, AI in everyday life, and prompt engineering tutorials. They explain complex topics in simple language for students and beginners." }
		    },
		    {
		      "@type": "Question",
		      "name": "What is prompt engineering?",
		      "acceptedAnswer": { "@type": "Answer", "text": "Prompt engineering means writing clear prompts to guide AI tools like ChatGPT. Watch our prompt writing video to learn how to get better answers from AI." }
		    },
		    {
		      "@type": "Question",
		      "name": "Are these AI lessons suitable for kids and students?",
		      "acceptedAnswer": { "@type": "Answer", "text": "Yes. The AI video lessons are designed for kids, students, and non-technical beginners with simple explanations and examples." }
		    }
		  ]
		}
		</script>

		<style>
			.video-grid {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
				gap: 24px;
				align-items: stretch;
			}
			.video-card {
				background: #fff;
				border-radius: 12px;
				box-shadow: 0 10px 30px rgba(0,0,0,.1);
				padding: 16px;
				display: flex;
				flex-direction: column;
				height: 100%;
			}
			.video-card h3 { margin: 0 0 6px; font-size: 1.1rem; }
			.video-card p { margin: 0 0 12px; color: #444; font-size: .95rem; }
			.video-card .video-container {
				position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;
				border-radius: 10px; box-shadow: 0 8px 24px rgba(0,0,0,.18); background:#000; margin: 10px 0 12px;
			}
			.video-card .video-container iframe { position:absolute; top:0; left:0; width:100%; height:100%; border:0; }
			.video-card .btn-link { display:inline-block; background:#0077c8; color:#fff; padding:.5rem .9rem; border-radius:6px; text-decoration:none; font-size:.95rem; margin-top: auto; }
			.video-card .btn-link:hover { filter: brightness(1.05); }

			/* Coming soon animation */
			.coming-card { position: relative; background: #f6f7f8; overflow: hidden; }
			.shimmer {
				position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(255,255,255,.7) 50%, rgba(0,0,0,0) 100%);
				transform: translateX(-100%);
				animation: shimmer 1.8s infinite;
			}
			@keyframes shimmer { 0% { transform: translateX(-100%); } 100% { transform: translateX(100%); } }
			.placeholder-thumb { position: relative; width:100%; padding-bottom:56.25%; background:#e9ebee; border-radius: 10px; }
			.coming-title { font-weight: 700; margin: 10px 0 6px; }
			.loading-dots { display:inline-block; }
			.loading-dots span { display:inline-block; width:6px; height:6px; margin:0 2px; background:#0077c8; border-radius:50%; animation: bounce 1s infinite ease-in-out; }
			.loading-dots span:nth-child(2) { animation-delay: .15s; }
			.loading-dots span:nth-child(3) { animation-delay: .3s; }
			@keyframes bounce { 0%, 80%, 100% { transform: scale(0); opacity:.5 } 40% { transform: scale(1); opacity:1 } }
		</style>
	</head>
	<body>
		<?php include 'layout/header.php'; ?>

		<section class="hero">
			<div class="hero-content">
				<h1>AI Course Video Lectures</h1>
				<a href="/">Home</a>
				|
				<a href="/ai-course">All Modules</a>
			</div>
		</section>

		<div class="container">

			<div class="video-grid">
				<!-- Chapter 1 Video Card -->
				<div class="video-card">
					<h3>Chapter 1: Introduction to AI</h3>
					<p>Understand the basics of AI in a simple and fun way.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/--QaVxL2lnw?si=Y6mcs5aLStPh0uAv" title="Introduction to AI – Video for Kids" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/introduction-to-ai-1">Open Chapter 1</a>
				</div>

				<!-- Chapter 2 Video Card -->
				<div class="video-card">
					<h3>Chapter 2: Where AI Shows Up in Everyday Life</h3>
					<p>See real-life examples of AI at home, school, and work.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/JK6VMNbTX0Q?si=zLIfYYYjCIrM0SHK" title="Where AI Shows Up in Everyday Life" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/where-ai-shows-up-in-everyday-life-2">Open Chapter 2</a>
				</div>

				<!-- Chapter 3 Video Card -->
				<div class="video-card">
					<h3>Chapter 3: Prompt Writing – How to Write a Prompt</h3>
					<p>Learn to write clear prompts to get better results from AI tools.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/QOz0Ia9H6lo?si=27tS_vQijKZu634s" title="Prompt Writing Basics" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/ai-prompt-writing-guide">Open Chapter 3</a>
				</div>

				<div class="video-card">
					<h3>Chapter 4: How AI Learns from Data</h3>
					<p>Understand how AI models learn from examples during training.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/SEEVKveGk9s?si=shv05Z92eSEnhvfK" title="How AI Learns from Data" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/how-ai-learns-from-data-4">Open Chapter 4</a>
				</div>

				<div class="video-card">
					<h3>Chapter 5: Types of AI Tools</h3>
					<p>Explore different AI tools and how to use them.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/17RUaBtWJps?si=tnWOnxKpqBMO3urU" title="Types of AI Tools" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/types-of-ai-tools-and-how-to-use-them-5">Open Chapter 5</a>
				</div>

				<!-- Chapter 6 Video Card -->
				<div class="video-card">
					<h3>Chapter 6: Create Your First AI Project</h3>
					<p>Build your first AI project step-by-step, perfect for beginners.</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/YmLLBIdH2DI?si=S5FKAeaku_ZlB3oJ" title="Create Your First AI Project – Step by Step" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
					</div>
					<a class="btn-link" href="/create-your-first-ai-project-6">Open Chapter 6</a>
				</div>

				<!-- Chapter 7 Coming Soon -->
				<div class="video-card coming-card">
					<h3 class="coming-title">Chapter 7: The Future of AI – Coming Soon</h3>
					<div class="placeholder-thumb"></div>
					<div class="shimmer" aria-hidden="true"></div>
					<p>We are preparing this chapter’s video <span class="loading-dots" aria-hidden="true"><span></span><span></span><span></span></span></p>
				</div>
			</div>

			<div class="section">
				<h2>Free AI Course Videos for Beginners</h2>
				<p>Watch beginner-friendly Artificial Intelligence video lectures online — no signup required. This page collects our <strong>AI course videos</strong> including <em>Introduction to AI</em>, <em>AI in everyday life</em>, and a <em>prompt engineering tutorial</em> to help students learn AI step by step.</p>
				<ul class="custom-bullets">
					<li>Learn AI for beginners with simple explanations and visuals</li>
					<li>Free AI video lessons for students, kids, and self‑learners</li>
					<li>Prompt engineering video: how to write better prompts for ChatGPT</li>
					<li>AI basics explained: concepts, examples, and real‑world use cases</li>
					<li>Start the full course here: <a href="/ai-course">AI Course for Beginners</a></li>
				</ul>
			</div>

			<div class="section" aria-labelledby="who-for">
				<h2 id="who-for">Who these AI video lectures are for</h2>
				<ul class="custom-bullets">
					<li><strong>AI video lectures for beginners</strong> who want to <strong>learn AI with video lectures</strong> that are simple and practical.</li>
					<li>Students and teachers looking for <strong>free AI course videos online</strong> and <strong>online AI training videos</strong> they can use in class.</li>
					<li>Developers seeking <strong>AI video tutorials for developers</strong> and an <strong>AI programming video course</strong> to start building projects.</li>
					<li>Learners who prefer a <strong>hands-on AI video course</strong> with clear steps and practice ideas.</li>
					<li>Professionals exploring <strong>AI certification video course</strong> prep materials to build fundamentals before exams.</li>
				</ul>
			</div>

			<div class="section" aria-labelledby="topics-covered">
				<h2 id="topics-covered">Topics covered in our Artificial Intelligence video tutorials</h2>
				<ul class="custom-bullets">
					<li>AI basics and real-life examples — a curated set of <strong>Artificial Intelligence video tutorials</strong>.</li>
					<li><strong>AI machine learning video lessons</strong> and <strong>deep learning course video tutorials</strong> (advanced modules coming soon).</li>
					<li><strong>Advanced AI video tutorials</strong> and model demos (rolling out as new chapters launch).</li>
					<li><strong>AI course video lessons with exercises</strong> and practice prompts to apply what you learn.</li>
					<li>Editorial picks of the <strong>best AI video tutorials 2025</strong> as we update the course throughout the year.</li>
				</ul>
				<p>We continuously add new lessons to keep this library fresh. Bookmark this page and check back for updates.</p>
			</div>

			<div class="section" aria-labelledby="faqs">
				<h2 id="faqs">AI Video Lectures – Frequently Asked Questions</h2>
				<div class="faq-list">
					<h3>Is there a free AI course with video lectures?</h3>
					<p>Yes. Our <a href="/ai-course">AI course</a> includes free Artificial Intelligence video lessons for beginners. Watch online without registration.</p>
					<h3>How can beginners learn Artificial Intelligence online?</h3>
					<p>Start with our <a href="/introduction-to-ai-1">Introduction to AI</a>, continue with <a href="/where-ai-shows-up-in-everyday-life-2">AI in everyday life</a>, then practice with the <a href="/ai-prompt-writing-guide">prompt engineering video</a>.</p>
					<h3>What is prompt engineering?</h3>
					<p>Prompt engineering is the skill of writing clear prompts to guide AI tools like ChatGPT. It helps you get accurate, useful responses.</p>
					<h3>Are these AI lessons suitable for kids and students?</h3>
					<p>Yes. The content is designed for students, kids, and non‑technical beginners with simple language and examples.</p>
				</div>
			</div>

			<div class="section" style="margin-top:28px; text-align:center;">
				<a class="btn" href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener" style="background-color:#ff0033; color:#fff; padding:.6rem 1rem; border-radius:6px; text-decoration:none; display:inline-block; margin-top:8px;">Subscribe on YouTube</a>
			</div>
		</div>

		<?php include 'layout/footer.php'; ?>
	</body>
</html>
