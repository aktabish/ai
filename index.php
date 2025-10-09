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
		<title>AI Learner – Free AI Learning for Kids, Students, and Beginners</title>
		<link rel="canonical" href="https://ailearner.free.nf/" />
		<meta name="description" content="AI Learner is a free website that teaches Artificial Intelligence to kids, students, and non-tech beginners — with step-by-step chapters, visuals, and simple language." />
		<meta name="keywords" content="AI for kids, learn AI free, beginner AI, simple AI tutorials, AI projects for students, no-code AI tools, visual AI learning" />
		<meta name="author" content="AI Learner Team">
		
		<!-- Open Graph (for LinkedIn, WhatsApp, Facebook) -->
		<meta name="title" property="og:title" content="AI Learner – Free AI Learning for Kids, Students, and Beginners" >
		<meta property="og:description" content="AI Learner is a free website that teaches Artificial Intelligence to kids, students, and non-tech beginners — with step-by-step chapters, visuals, and simple language.">
		<meta property="og:url" content="https://ailearner.free.nf/">
		<meta property="og:type" content="article">
		<meta property="og:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		<meta property="og:site_name" content="AI Learner">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="AI Learner – Free AI Learning for Kids, Students, and Beginners">
		<meta name="twitter:description" content="AI Learner is a free website that teaches Artificial Intelligence to kids, students, and non-tech beginners — with step-by-step chapters, visuals, and simple language.">
		<meta name="twitter:image" content="https://ailearner.free.nf/public/images/ailearner-free.png">
		
		<meta name="google-site-verification" content="oOkuetuiQXo-KMyrEIFC2Yds0NYwKm3tEcwwKKn-qWY" />
		<!-- Existing Organization Schema & Website Schema -->
		
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@graph": [
			{
			  "@type": "Organization",
			  "@id": "https://ailearner.free.nf/#organization",
			  "name": "AI Learner",
			  "url": "https://ailearner.free.nf",
			  "logo": {
				"@type": "ImageObject",
				"url": "https://ailearner.free.nf/public/images/ailearner-180x180.png"
			  }
			},
			{
			  "@type": "WebSite",
			  "@id": "https://ailearner.free.nf/#website",
			  "url": "https://ailearner.free.nf/",
			  "name": "AI Learner",
			  "description": "Learn Artificial Intelligence easily with visual, bite-sized lessons – no coding required.",
			  "publisher": {
				"@id": "https://ailearner.free.nf/#organization"
			  }
			}
		  ]
		}
		</script>


		
		<!-- New FAQ Schema (Add this below) -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "FAQPage",
		  "mainEntity": [
			{
			  "@type": "Question",
			  "name": "What is AI Learner?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "AI Learner is a free AI learning website for beginners that teaches Artificial Intelligence in simple language. It's made for kids, students, and non-technical users who want to learn AI step by step."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Do I need programming knowledge to use AI Learner?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "No coding needed! AI Learner is perfect for beginners. It uses easy explanations and visuals to help you learn AI without coding."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Is AI Learner really free?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes, it's 100% free. You don't need to log in or sign up. Just visit the site and start learning at your own pace."
			  }
			},
			{
			  "@type": "Question",
			  "name": "What topics can I learn on AI Learner?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "You will learn about Artificial Intelligence (AI), Machine Learning, Neural Networks, tools like ChatGPT, and real-world examples — all explained in simple terms."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Is AI Learner suitable for kids and students?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes! It’s built for school students and curious beginners. Even 7th and 8th graders can understand the content with ease."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Can teachers use AI Learner in class?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Absolutely. It's a helpful AI teaching resource for schools, computer labs, or homeschoolers. Feel free to use the content in class projects (with credit)."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Is the website mobile-friendly?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes. AI Learner works smoothly on mobile phones, tablets, and desktop devices."
			  }
			},
			{
			  "@type": "Question",
			  "name": "How is AI Learner different from YouTube or Google?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Unlike YouTube or Google, AI Learner is a step-by-step AI learning platform written in easy language. No distractions — just simple lessons and fun projects."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Can I share this site with friends?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes! Share the link: https://ailearner.free.nf — it's free for all."
			  }
			},
			{
			  "@type": "Question",
			  "name": "What is Artificial Intelligence (AI)?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Artificial Intelligence (AI) is the ability of machines and software to think, learn, and solve problems like humans. It is used in apps like chatbots, voice assistants, self-driving cars, and recommendation systems."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Why should beginners learn AI?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Learning AI helps students, professionals, and entrepreneurs prepare for the future. AI skills improve problem-solving, creativity, and career opportunities in tech and business."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Can I learn AI without coding?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "Yes! AI Learner provides beginner-friendly lessons with simple explanations. You can start with concepts and examples before moving to coding."
			  }
			},
			{
			  "@type": "Question",
			  "name": "Who created AI Learner?",
			  "acceptedAnswer": {
				"@type": "Answer",
				"text": "It's a project by educators and developers who believe that AI should be accessible to everyone — not just tech experts."
			  }
			}
		  ]
		}
		</script>

	<!-- Testimonials (Review) Schema -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "ItemList",
		  "name": "AI Learner Testimonials",
		  "itemListElement": [
			{
			  "@type": "Review",
			  "reviewBody": "AI Learner made complex ideas simple. I used the prompts lesson to build a chatbot demo over a weekend.",
			  "author": {
				"@type": "Person",
				"name": "Razia Khan",
				"jobTitle": "Product Intern",
				"affiliation": { "@type": "Organization", "name": "NovaNet AI" }
			  },
			  "itemReviewed": { "@type": "Organization", "@id": "https://ailearner.free.nf/#organization" }
			},
			{
			  "@type": "Review",
			  "reviewBody": "I finally understand how models learn from data. The visuals are perfect for beginners.",
			  "author": {
				"@type": "Person",
				"name": "Daniel Romero",
				"jobTitle": "Junior Analyst",
				"affiliation": { "@type": "Organization", "name": "PixelMind Labs" }
			  },
			  "itemReviewed": { "@type": "Organization", "@id": "https://ailearner.free.nf/#organization" }
			},
			{
			  "@type": "Review",
			  "reviewBody": "Our school tech club uses these chapters. The step-by-step flow is ideal for students.",
			  "author": {
				"@type": "Person",
				"name": "Sana Iqbal",
				"jobTitle": "Club Lead",
				"affiliation": { "@type": "Organization", "name": "SynapseWorks Academy" }
			  },
			  "itemReviewed": { "@type": "Organization", "@id": "https://ailearner.free.nf/#organization" }
			}
		  ]
		}
		</script>
	<!-- WebPage schema with speakable for AEO -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "WebPage",
		  "@id": "https://ailearner.free.nf/#webpage",
		  "url": "https://ailearner.free.nf/",
		  "name": "AI Learner – Free AI Learning for Kids, Students, and Beginners",
		  "description": "AI Learner is a free website that teaches Artificial Intelligence to kids, students, and non-tech beginners — with step-by-step chapters, visuals, and simple language.",
		  "inLanguage": "en",
		  "isPartOf": { "@id": "https://ailearner.free.nf/#website" },
		  "about": [
			{ "@type": "Thing", "name": "Artificial Intelligence" },
			{ "@type": "Thing", "name": "Machine Learning" },
			{ "@type": "Thing", "name": "AI education for beginners" }
		  ],
		  "primaryImageOfPage": { "@type": "ImageObject", "url": "https://ailearner.free.nf/public/images/ailearner-free.png" },
		  "speakable": {
			"@type": "SpeakableSpecification",
			"cssSelector": [ ".hero h1", ".hero p" ]
		  }
		}
		</script>

		<!-- Breadcrumbs schema -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "BreadcrumbList",
		  "itemListElement": [
			{ "@type": "ListItem", "position": 1, "name": "Home", "item": "https://ailearner.free.nf/" }
		  ]
		}
		</script>

		<!-- Course Chapters as LearningResource list -->
		<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "ItemList",
		  "name": "AI Learner Course Chapters",
		  "itemListElement": [
			{ "@type": "ListItem", "position": 1, "item": { "@type": "LearningResource", "name": "Introduction to AI", "url": "https://ailearner.free.nf/introduction-to-ai-1" } },
			{ "@type": "ListItem", "position": 2, "item": { "@type": "LearningResource", "name": "AI in Everyday Life", "url": "https://ailearner.free.nf/where-ai-shows-up-in-everyday-life-2" } },
			{ "@type": "ListItem", "position": 3, "item": { "@type": "LearningResource", "name": "Prompt Writing", "url": "https://ailearner.free.nf/how-to-write-a-prompt-3" } },
			{ "@type": "ListItem", "position": 4, "item": { "@type": "LearningResource", "name": "How AI Learns from Data", "url": "https://ailearner.free.nf/how-ai-learns-from-data-4" } },
			{ "@type": "ListItem", "position": 5, "item": { "@type": "LearningResource", "name": "Types of AI Tools", "url": "https://ailearner.free.nf/types-of-ai-tools-and-how-to-use-them-5" } },
			{ "@type": "ListItem", "position": 6, "item": { "@type": "LearningResource", "name": "Create Your First AI Project", "url": "https://ailearner.free.nf/create-your-first-ai-project-6" } },
			{ "@type": "ListItem", "position": 7, "item": { "@type": "LearningResource", "name": "Future of AI", "url": "https://ailearner.free.nf/future-of-ai-7" } },
			{ "@type": "ListItem", "position": 8, "item": { "@type": "LearningResource", "name": "AI Resume Building", "url": "https://ailearner.free.nf/how-to-make-your-resume-8" } },
			{ "@type": "ListItem", "position": 9, "item": { "@type": "LearningResource", "name": "AI & Creativity", "url": "https://ailearner.free.nf/ai-creativity-art-music-storytelling-9" } },
			{ "@type": "ListItem", "position": 10, "item": { "@type": "LearningResource", "name": "Learn a New Language", "url": "https://ailearner.free.nf/learn-a-new-language-using-ai-10" } },
			{ "@type": "ListItem", "position": 11, "item": { "@type": "LearningResource", "name": "Cooking & Fashion with AI", "url": "https://ailearner.free.nf/cooking-and-fashion-using-ai-11" } },
			{ "@type": "ListItem", "position": 12, "item": { "@type": "LearningResource", "name": "Islamic & Ethical AI", "url": "https://ailearner.free.nf/islamic-ai-12" } },
			{ "@type": "ListItem", "position": 13, "item": { "@type": "LearningResource", "name": "AI for Developers", "url": "https://ailearner.free.nf/ai-for-developers" } },
			{ "@type": "ListItem", "position": 14, "item": { "@type": "LearningResource", "name": "AI in Healthcare", "url": "https://ailearner.free.nf/ai-for-healthcare" } },
			{ "@type": "ListItem", "position": 15, "item": { "@type": "LearningResource", "name": "AI for Teachers", "url": "https://ailearner.free.nf/ai-for-teachers" } },
			{ "@type": "ListItem", "position": 16, "item": { "@type": "LearningResource", "name": "AI in Marketing", "url": "https://ailearner.free.nf/ai-in-marketing" } },
			{ "@type": "ListItem", "position": 17, "item": { "@type": "LearningResource", "name": "Coming Soon", "url": "https://ailearner.free.nf/coming-soon" } }
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
            <h1>Welcome to AI Learner – Learn AI the Easy and Fun Way!</h1>
            <p>AI Learner is a free and beginner-friendly website that teaches Artificial Intelligence (AI) to kids, students, and non-tech users. Our easy-to-follow chapters use simple language, real-world examples, and fun visuals to make learning AI exciting and understandable. Whether you're just curious or want to build your first AI project without coding, this is the perfect place to start your AI journey!</p>
            <a href="/ai-course" class="btn" aria-label="Start AI course">Start Learning</a>
        </div>
    </section>

    <section id="chapter-carousel" class="chapter-carousel" style="margin: 2em auto; max-width: 900px;">
        <h2 style="text-align:center;">Explore AI Course Chapters</h2>
        <div class="carousel-container">
            <button class="carousel-btn prev" aria-label="Previous chapters">&#8592;</button>
            <div class="carousel-track">
                <a class="carousel-slide" href="/introduction-to-ai-1"><span class="carousel-icon">🤖</span><span class="carousel-label">Introduction to AI</span></a>
                <a class="carousel-slide" href="/where-ai-shows-up-in-everyday-life-2"><span class="carousel-icon">🏠</span><span class="carousel-label">AI in Everyday Life</span></a>
                <a class="carousel-slide" href="/how-to-write-a-prompt-3"><span class="carousel-icon">✍️</span><span class="carousel-label">Prompt Writing</span></a>
                <a class="carousel-slide" href="/how-ai-learns-from-data-4"><span class="carousel-icon">📊</span><span class="carousel-label">How AI Learns from Data</span></a>
                <a class="carousel-slide" href="/types-of-ai-tools-and-how-to-use-them-5"><span class="carousel-icon">🛠️</span><span class="carousel-label">Types of AI Tools</span></a>
                <a class="carousel-slide" href="/create-your-first-ai-project-6"><span class="carousel-icon">🚀</span><span class="carousel-label">Create Your First AI Project</span></a>
                <a class="carousel-slide" href="/future-of-ai-7"><span class="carousel-icon">🔮</span><span class="carousel-label">Future of AI</span></a>
                <a class="carousel-slide" href="/how-to-make-your-resume-8"><span class="carousel-icon">📄</span><span class="carousel-label">AI Resume Building</span></a>
                <a class="carousel-slide" href="/ai-creativity-art-music-storytelling-9"><span class="carousel-icon">🎨</span><span class="carousel-label">AI & Creativity</span></a>
                <a class="carousel-slide" href="/learn-a-new-language-using-ai-10"><span class="carousel-icon">🗣️</span><span class="carousel-label">Learn a New Language</span></a>
                <a class="carousel-slide" href="/cooking-and-fashion-using-ai-11"><span class="carousel-icon">👗</span><span class="carousel-label">Cooking & Fashion with AI</span></a>
                <a class="carousel-slide" href="/islamic-ai-12"><span class="carousel-icon">☪️</span><span class="carousel-label">Islamic & Ethical AI</span></a>
                <a class="carousel-slide" href="/ai-for-developers"><span class="carousel-icon">💻</span><span class="carousel-label">AI for Developers</span></a>
                <a class="carousel-slide" href="/ai-for-healthcare"><span class="carousel-icon">🏥</span><span class="carousel-label">AI in Healthcare</span></a>
                <a class="carousel-slide" href="/ai-for-teachers"><span class="carousel-icon">👩‍🏫</span><span class="carousel-label">AI for Teachers</span></a>
                <a class="carousel-slide" href="/ai-in-marketing"><span class="carousel-icon">📈</span><span class="carousel-label">AI in Marketing</span></a>
                <a class="carousel-slide" href="/coming-soon"><span class="carousel-icon">⏳</span><span class="carousel-label">Coming Soon</span></a>
            </div>
            <button class="carousel-btn next" aria-label="Next chapters">&#8594;</button>
        </div>
        <style>
        .carousel-container { display: flex; align-items: center; justify-content: center; }
        .carousel-btn { background: #1a73e8; color: #fff; border: none; border-radius: 50%; width: 2.5em; height: 2.5em; font-size: 1.5em; cursor: pointer; margin: 0 0.5em; z-index: 2; }
        .carousel-track { display: flex; overflow-x: auto; scroll-behavior: smooth; gap: 1em; padding: 1em 0; max-width: 700px; }
        .carousel-slide {
            flex: 0 0 auto;
            background: #e3f2fd;
            border-radius: 16px;
            width: 120px;
            height: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: bold;
            color: #1a73e8;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.07);
            transition: background 0.2s, transform 0.2s;
            font-size: 1em;
            position: relative;
        }
        .carousel-slide:hover { background: #bbdefb; transform: scale(1.07); }
        .carousel-icon {
            font-size: 2.2em;
            margin-bottom: 0.3em;
            display: block;
        }
        .carousel-label {
            font-size: 1em;
            margin-top: 0.2em;
            display: block;
        }
        @media (max-width: 600px) {
            .carousel-track { max-width: 90vw; }
            .carousel-slide { width: 90px; height: 90px; font-size: 0.95em; }
            .carousel-icon { font-size: 1.5em; }
        }
        </style>
        <script>
        const track = document.querySelector('.carousel-track');
        const prevBtn = document.querySelector('.carousel-btn.prev');
        const nextBtn = document.querySelector('.carousel-btn.next');
        let autoScrollInterval;
        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                track.scrollBy({left: 1, behavior: 'smooth'});
                // Loop back to start if at end
                if (track.scrollLeft + track.offsetWidth >= track.scrollWidth - 2) {
                    track.scrollTo({left: 0, behavior: 'smooth'});
                }
            }, 30); // Slow speed
        }
        function stopAutoScroll() { clearInterval(autoScrollInterval); }
        prevBtn.onclick = () => { track.scrollBy({left: -250, behavior: 'smooth'}); stopAutoScroll(); startAutoScroll(); };
        nextBtn.onclick = () => { track.scrollBy({left: 250, behavior: 'smooth'}); stopAutoScroll(); startAutoScroll(); };
        track.addEventListener('mouseenter', stopAutoScroll);
        track.addEventListener('mouseleave', startAutoScroll);
        startAutoScroll();
        </script>
    </section>

    <section id="features" class="features">
        <h2>Free AI Lessons for Beginners, Kids, and Students</h2>
			<div class="feature-grid">
				<div class="feature">
				<h3><a href="/ai-course">Structured AI Curriculum – Learn AI from Basics to Advanced</a></h3>
				<p>Start your <a href="/ai-course" ><i>AI journey</i></a> from the very basics and explore advanced concepts through our beginner-friendly, step-by-step learning path designed for students, kids, and non-tech learners.</p>
			</div>
			<div class="feature">
				<h3><a href="/introduction-to-ai-1">Easy-to-Understand AI Lessons for Beginners</a></h3>
				<p>Learn AI using real-life examples, clear language, and simple lessons crafted for kids, students, and complete beginners — no coding required</p>
			</div>
			<div class="feature">
				<h3><a href="/where-ai-shows-up-in-everyday-life-2">Interactive AI Learning Tools and Quizzes</a></h3>
				<p>Use smart AI-powered tools, quizzes, and personalized learning paths to learn faster and stay engaged — ideal for students, kids, and non-programmers.</p>
			</div>
			<div class="feature">
                <h3><a href="/how-to-write-a-prompt-3">Prompt Writing for ChatGPT, Bard, and Other AI Tools</a></h3>
                <p>Master the skill of writing clear and <a href="/how-to-write-a-prompt-3"><i>effective prompts</i></a> to get accurate and useful results from AI models like ChatGPT, Bard, and Claude.</p>
            </div>
			<div class="feature">
                <h3><a href="/personal-ai-tutor-online" >AI Ustaad – Your Personal AI Teacher for Kids and Beginners</a></h3>
                <p>Whether you're a student, a curious learner, or a parent seeking a child-friendly AI teacher, AI Ustaad is your trusted AI learning assistant for guided, one-on-one learning.</p>
            </div>
        </div>
    </section>
	
	<!--section id="languages" class="languages">
		<div class="banner">
			<img loading="lazy" src="/public/images/ailearner-banner.webp" alt="AI Learner free artificial intelligence course for beginners and kids" class="responsive-image" width="600" height="400" style="max-width:100%; max-height:400px">
		</div>
	</section-->
	
	<section id="testimonials" class="testimonials" aria-label="What learners say">
		<div class="container">
			<h2 style="text-align:center; font-size: 2em; margin: 0 0 1em;">What learners say</h2>
			<div class="testimonial-grid">
				<figure class="testimonial">
					<blockquote>“AI Learner made complex ideas simple. I used the prompts lesson to build a chatbot demo over a weekend.”</blockquote>
					<figcaption>
						<strong>Razia Khan</strong> — Product Intern at NovaNet AI
					</figcaption>
				</figure>
				<figure class="testimonial">
					<blockquote>“I finally understand how models learn from data. The visuals are perfect for beginners.”</blockquote>
					<figcaption>
						<strong>Daniel Romero</strong> — Junior Analyst at PixelMind Labs
					</figcaption>
				</figure>
				<figure class="testimonial">
					<blockquote>“Our school tech club uses these chapters. The step-by-step flow is ideal for students.”</blockquote>
					<figcaption>
						<strong>Sana Iqbal</strong> — Club Lead at SynapseWorks Academy
					</figcaption>
				</figure>
			</div>
		</div>
		<style>
			.testimonials { padding: 2em 1em; background: #f9fbff; }
			.testimonial-grid {
				display: grid;
				grid-template-columns: repeat(3, 1fr);
				gap: 1em;
				max-width: 1000px;
				margin: 0 auto;
			}
			.testimonial {
				background: #ffffff;
				border-radius: 12px;
				padding: 1.2em;
				box-shadow: 0 2px 8px rgba(0,0,0,0.06);
				border: 1px solid #e6eefc;
			}
			.testimonial blockquote { margin: 0 0 .8em; line-height: 1.5; color: #1f2937; }
			.testimonial figcaption { color: #415a77; font-size: .95em; }
			@media (max-width: 800px) {
				.testimonial-grid { grid-template-columns: 1fr; }
			}
		</style>
	</section>
	
	<div class="container" id="faq">
		<h2 style="text-align: center; font-size: 2em; margin-bottom: 1em;">🤖 Frequently Asked Questions – AI Learner</h2>

		<div class="section">
		
			<div class="faq-item">
			  <button class="faq-question">1. What is AI Learner? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>AI Learner is a <strong>free AI learning website for beginners</strong> that teaches Artificial Intelligence in <strong>simple language</strong>. It's made for <strong>kids, students, and non-technical users</strong> who want to learn AI step by step.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">2. Do I need programming knowledge to use AI Learner? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p><strong>No coding needed!</strong> AI Learner is perfect for beginners. It uses easy explanations and visuals to help you <strong>learn AI without coding</strong>.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">3. Is AI Learner really free? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Yes, it's <strong>100% free</strong>. You don't need to log in or sign up. Just visit the site and start learning at your own pace.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">4. What topics can I learn on AI Learner? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>You will learn about <strong>Artificial Intelligence (AI)</strong>, <strong>Machine Learning</strong>, <strong>Neural Networks</strong>, tools like <strong>ChatGPT</strong>, and <strong>real-world examples</strong> — all explained in simple terms.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">5. Is AI Learner suitable for kids and students? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Yes! It's built for <strong>school students and curious beginners</strong>. Even <strong>7th and 8th graders</strong> can understand the content with ease.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">6. Can teachers use AI Learner in class? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Absolutely. It's a helpful <strong>AI teaching resource</strong> for schools, computer labs, or homeschoolers. Feel free to use the content in class projects (with credit).</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">7. Is the website mobile-friendly? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Yes. AI Learner works smoothly on <strong>mobile phones, tablets, and desktop devices</strong>.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">8. How is AI Learner different from YouTube or Google? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Unlike YouTube or Google, AI Learner is a <strong>step-by-step AI learning platform</strong> written in easy language. No distractions — just simple lessons and fun projects.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">9. Can I share this site with friends? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>Yes! Share the link: <a href="https://ailearner.free.nf" target="_blank" rel="noopener">https://ailearner.free.nf</a> — it's free for all.</p>
			  </div>
			</div>

			<div class="faq-item">
			  <button class="faq-question">10. Who created AI Learner? <span class="icon">➕</span></button>
			  <div class="faq-answer">
				<p>It's a project by educators and developers who believe that <strong>AI should be accessible to everyone</strong> — not just tech experts.</p>
			  </div>
			</div>
		</div>
	</div>

	
	<?php
	include 'layout/footer.php';
	?>

<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const button = item.querySelector('.faq-question');
    const icon = item.querySelector('.icon');

    button.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');
      faqItems.forEach(i => {
        i.classList.remove('active');
        i.querySelector('.icon').textContent = '➕';
      });

      if (!isOpen) {
        item.classList.add('active');
        icon.textContent = '➖';
      }
    });
  });
</script>
</body>
</html>
