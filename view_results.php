<?php
// view_results.php
include 'db.php';

$username = 'student1'; // replace with session or login in production

$sql = "SELECT module, score, date_taken FROM results WHERE username = ? ORDER BY date_taken DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Quiz Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Your Quiz Results</h1>
  <table border="1">
    <thead>
      <tr>
        <th>Module</th>
        <th>Score</th>
        <th>Date Taken</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo htmlspecialchars($row['module']); ?></td>
          <td><?php echo $row['score']; ?>/2</td>
          <td><?php echo $row['date_taken']; ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <a href="index.html">Back to Home</a>
</body>
</html>
