<?php
include("db.php");
 
$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$content = $_POST['content'];
 
$stmt = $conn->prepare("INSERT INTO posts (title, author, category, content) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $title, $author, $category, $content);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Post Saved</title>
  <style>
    body {
      background-color: #e8f0fe;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
 
    .box {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
      padding: 40px;
      text-align: center;
      max-width: 500px;
      width: 90%;
    }
 
    h2 {
      color: #0077cc;
      margin-bottom: 20px;
    }
 
    p {
      font-size: 16px;
      color: #444;
    }
  </style>
  <script>
    // Redirect to homepage after 2 seconds
    setTimeout(function() {
      window.location.href = 'index.php';
    }, 2000);
  </script>
</head>
<body>
  <div class="box">
    <h2>✅ Post Published!</h2>
    <p>Your post has been successfully published.<br>Redirecting to homepage...</p>
  </div>
</body>
</html>
