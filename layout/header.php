<header>
	<nav class="navbar">
		<div class="logo">
			<a href="/" >AI Learner</a>
		</div>
		<button class="menu-toggle" aria-label="Open menu" aria-controls="nav-menu" aria-expanded="false">⋯</button>
		<ul id="nav-menu" class="nav-links">
			<?php
			if (isset($_SESSION['user_id'])) 
			{
			?>
			<li><a href="/signout">Sign-Out</a></li>
			<?php
			}
			else
			{
			?>
			<li><a href="/signin">Sign-In</a></li>
			<li><a href="/signup">Sign-Up</a></li>
			<?php
			}
			?>
			<li><a href="/ai-course">AI Course</a></li>
			<li><a href="/video-lectures">Video Lectures</a></li>
			<li><a href="/ai-playground">AI Playground</a></li>
			<li><a href="/free-ai-tools">Free AI Tools</a></li>
			<li><a href="/ai-quiz.php">AI Quiz</a></li>
			<li><a href="/personal-ai-tutor-online">AI Teacher</a></li>
			<li><a href="/contact">Contact</a></li>
			<li class="yt-link"><a href="https://www.youtube.com/@aiguruabsar" target="_blank" rel="noopener">
			<img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" 
			alt="YouTube Channel" width="150">
			</a></li>
			</ul>
	</nav>
	<style>
		/* Mobile menu for header */
		header .navbar { display:flex; align-items:center; justify-content:space-between; gap:12px; }
		header .navbar .menu-toggle { display:none; background:#0b1220; color:#fff; border:1px solid #223046; border-radius:8px; padding:8px 12px; font-size:20px; line-height:1; cursor:pointer; }
		header .navbar .nav-links .yt-link { margin-left: 8px; }
        header .navbar .nav-links .yt-link a { display:inline-flex; align-items:center; background:#ffffff; border:1px solid #e5e7eb; border-radius:8px; padding:4px 8px; line-height:1; }
        header .navbar .nav-links .yt-link a:hover { background:#f9fafb; border-color:#d1d5db; }
        header .navbar .nav-links .yt-link img { height: 20px; width: auto; display: block; }
        @media (max-width: 768px) {
			header .navbar .menu-toggle { display:inline-flex; align-items:center; justify-content:center; }
			header .navbar .nav-links { display:none; position:absolute; right:12px; top:58px; background:#0b1220; border:1px solid #223046; border-radius:12px; padding:10px 14px; box-shadow: 0 10px 30px rgba(0,0,0,.25); width: min(88vw, 320px); max-height: 70vh; overflow:auto; z-index: 999; }
			header .navbar .nav-links.open { display:block; }
			header .navbar .nav-links li { margin: 8px 0; }
			header .navbar .nav-links a { display:block; }
		}
	</style>
	<script>
		(function(){
			try {
				var btn = document.querySelector('header .menu-toggle');
				var menu = document.getElementById('nav-menu');
				if (!btn || !menu) return;
				btn.addEventListener('click', function(){
					var open = menu.classList.toggle('open');
					btn.setAttribute('aria-expanded', String(open));
				});
				// Close on outside click
				document.addEventListener('click', function(e){
					if (!menu.classList.contains('open')) return;
					var inside = e.target.closest('header .navbar');
					if (!inside) {
						menu.classList.remove('open');
						btn.setAttribute('aria-expanded', 'false');
					}
				});
				// Close on ESC
				document.addEventListener('keydown', function(e){
					if (e.key === 'Escape') {
						menu.classList.remove('open');
						btn.setAttribute('aria-expanded', 'false');
					}
				});
			} catch (err) {}
		})();
	</script>
</header>