<?php
include("db.php");
 
$post_id = $_POST['post_id'];
$name = $_POST['name'];
$comment = $_POST['comment'];
 
$stmt = $conn->prepare("INSERT INTO comments (post_id, name, comment) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $post_id, $name, $comment);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Comment Submitted</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef5f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .message-box {
      background-color: #ffffff;
      padding: 30px;
      border: 2px solid #0077cc;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      border-radius: 8px;
    }
    .message-box h2 {
      color: #0077cc;
    }
    .message-box p {
      color: #333;
    }
  </style>
  <script>
    // Redirect after 2 seconds
    setTimeout(function() {
      window.location.href = 'view_post.php?id=<?php echo $post_id; ?>';
    }, 2000);
  </script>
</head>
<body>
  <div class="message-box">
    <h2>✅ Comment Submitted!</h2>
    <p>Thanks, <b><?php echo htmlspecialchars($name); ?></b>. You will be redirected shortly...</p>
  </div>
</body>
</html>
