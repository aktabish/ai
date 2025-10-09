<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: introduction-to-ai-1");
    exit();
}
include 'db.php';
include 'page_visit.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

// Step 1: Fetch user by email
    $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        // Step 2: Verify password
        if (password_verify($password, $row['password'])) {
            // Step 3: Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];

            echo "Login successful. Welcome, " . $_SESSION['user_name'];
            header("Location: introduction-to-ai-1"); exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with this email.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<!-- Meta tags for Sign In page -->
		<title>Sign In – AI Learner</title>
		<meta name="description" content="Access your AI Learner account to continue your AI Literacy journey. Sign in to track your progress and explore new lessons.">

		<!-- Open Graph -->
		<meta property="og:title" content="Sign In – AI Learner">
		<meta property="og:description" content="Continue your learning journey in AI Literacy. Sign in to access your dashboard and lessons.">
		<meta property="og:url" content="https://ailearner.free.nf/signin.html">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://ailearner.free.nf/ai_banner.webp">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Sign In – AI Learner">
		<meta name="twitter:description" content="Sign in to your AI Learner account and keep progressing in your AI journey.">
		<meta name="twitter:image" content="https://ailearner.free.nf/ai_banner.webp">

		<style>
		.container {
		  max-width: 500px;
		  margin: 40px auto;
		  padding: 20px;
		  background-color: #f8f8f8;
		  border-radius: 10px;
		  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
		}
		
		@media (max-width: 600px) {
		  .container {
			margin: 20px;
			padding: 15px;
		  }

		  input[type="text"],
		  input[type="email"],
		  input[type="password"],
		  input[type="submit"] {
			font-size: 14px;
			padding: 10px;
		  }
		}
		</style>
	</head>
	<body>
		<?php
			include 'layout/header.php';
		?>
		<div id="container" class="container">
		  <h1>SignIn</h1>
		  <?php
			if(isset($error))
			{
			?>
			<div class="error"><?=$error?></div>
			<?php
			}
			?>
		  <form method="post">
			<input type="email" name="email" placeholder="Email" required><br>
			<input type="password" name="password" placeholder="Password" required><br>
			<button class="signin-button" type="submit">SignIn</button>
			 <p>Don't have an account? <a href="signup">SignUp here</a></p>
		  </form>
		</div>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
