<?php
// view_contacts.php - very simple admin view for demo
$conn = new mysqli("localhost","root","","portfolio_db");
$result = $conn->query("SELECT id, name, email, message, created_at FROM contacts ORDER BY id DESC");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>View Contacts</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header"><h1>Messages</h1></header>
  <main class="container">
    <?php if ($result->num_rows > 0): ?>
      <table class="simple-table">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Time</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else: ?>
      <p>No messages yet.</p>
    <?php endif; ?>
  </main>
</body>
</html>
