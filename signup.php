<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: introduction-to-ai-1");
    exit();
}
include 'db.php';
include 'page_visit.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'] ?? '';
	$last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
	
	$name = $first_name.' '.$last_name;
	$stmt = $conn->prepare("SELECT count(id) FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();

	if ($count > 0) {
		$error = "Email already exists.";
	}
	else
	{

		$ip = getUserIP();
		
		$geoData = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"), true);

		$country = $geoData['country'] ?? '';
		$state   = $geoData['regionName'] ?? '';
		$city    = $geoData['city'] ?? '';

		$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
		$stmt = $conn->prepare("INSERT INTO users (username, email, password, country, state, city) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $name, $email, $password, $country, $state, $city);

		if ($stmt->execute()) {
			$_SESSION['user_id'] = $conn->insert_id; // get the auto-increment user ID
			$_SESSION['user_name'] = $name;
			$_SESSION['user_email'] = $email;
			 header("Location: introduction-to-ai-1"); exit();
			
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
	}
}
?>

<!-- Simple Signup Form -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'layout/head.php';
		?>
		<!-- Meta tags for Sign Up page -->
		<title>Sign Up – AI Learner</title>
		<meta name="description" content="Join AI Learner for free and start understanding Artificial Intelligence in simple steps. No technical skills needed.">

		<!-- Open Graph -->
		<meta property="og:title" content="Sign Up – AI Learner">
		<meta property="og:description" content="Create your free AI Learner account and begin your journey in understanding Artificial Intelligence.">
		<meta property="og:url" content="https://ailearner.free.nf/signup.html">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://ailearner.free.nf/ai_banner.webp">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Sign Up – AI Learner">
		<meta name="twitter:description" content="Get started with AI Literacy. Sign up now and start learning AI the easy way.">
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
			<h1>Signup</h1>
			<?php
			if(isset($error))
			{
			?>
			<div class="error"><?=$error?></div>
			<?php
			}
			?>
			<form onsubmit="return validatePassword();" method="post" action="">
				<input type="text" name="first_name" placeholder="First Name" required><br>
				<input type="text" name="last_name" placeholder="Last Name" required><br>
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="password" name="password" placeholder="Password" required id="password"><br>
				<span id="password-error" class="error"></span>
				<button class="signup-button" type="submit">SignUp</button>
				<p>Already has an account. <a href="/signin">SignIn here</a>.</p>
			</form>
		</div>
		<?php
			include 'layout/footer.php';
		?>
	</body>
</html>
