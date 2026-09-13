<?php
// quiz1.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $score = 0;
  if ($_POST['q1'] == 'b') $score++;
  if ($_POST['q2'] == 'a') $score++;

  $username = 'student1'; // replace with session or login system in future
  $module = 'Module 1';

  $stmt = $conn->prepare("INSERT INTO results (username, module, score) VALUES (?, ?, ?)");
  $stmt->bind_param("ssi", $username, $module, $score);
  $stmt->execute();
  $stmt->close();

  echo "<h2>Your Score: $score/2</h2>";
  echo "<a href='module1.html'>Back to Module</a>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz - Module 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Quiz: Introduction to AI</h1>
  <form method="post">
    <p>1. What is AI?</p>
    <label><input type="radio" name="q1" value="a"> A new language</label><br>
    <label><input type="radio" name="q1" value="b"> Machines mimicking human intelligence</label><br>
    <label><input type="radio" name="q1" value="c"> A social network</label>

    <p>2. Which is an example of AI?</p>
    <label><input type="radio" name="q2" value="a"> Alexa</label><br>
    <label><input type="radio" name="q2" value="b"> Paint</label><br>
    <label><input type="radio" name="q2" value="c"> Calculator</label>

    <br><br>
    <input type="submit" value="Submit Quiz">
  </form>
</body>
</html>
