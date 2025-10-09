<header>
	<nav class="navbar">
		<div class="logo">
			<a href="/" >AI Learner</a>
		</div>
		<ul class="nav-links">
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
			<li><a href="/personal-ai-tutor-online">AI Teacher</a></li>
			<li><a href="/contact">Contact</a></li>
			<?php
			if (isset($_SESSION['user_id'])) {
			?>
			<li><a href="/signout.php">SignOut</a></li>
			<?php
			}
			?>
		</ul>
	</nav>
</header>