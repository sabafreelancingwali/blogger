<?php
include("db.php");
 
if (!isset($_GET['id'])) {
  echo "Post not found.";
  exit;
}
 
$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
 
if ($result->num_rows === 0) {
  echo "Post not found.";
  exit;
}
 
$post = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo htmlspecialchars($post['title']); ?> - My Blogger</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f7fc;
      margin: 0;
      padding: 0;
    }
 
    .header {
      background-color: #0077cc;
      color: white;
      padding: 20px;
      text-align: center;
    }
 
    .container {
      max-width: 800px;
      margin: 30px auto;
      background: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
 
    h1 {
      margin-top: 0;
      color: #0077cc;
    }
 
    .meta {
      color: #777;
      font-size: 14px;
      margin-bottom: 20px;
    }
 
    .content {
      font-size: 17px;
      color: #333;
      line-height: 1.7;
    }
 
    .back {
      display: inline-block;
      margin-top: 30px;
      color: #0077cc;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }
 
    .back:hover {
      text-decoration: underline;
    }
 
    .comments {
      margin-top: 40px;
    }
 
    .comments h3 {
      margin-bottom: 15px;
      color: #333;
    }
 
    .comment-box {
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 6px;
      background: #f9f9f9;
      margin-bottom: 15px;
    }
 
    .comment-box p {
      margin: 0;
      font-size: 15px;
      color: #444;
    }
 
    .add-comment {
      margin-top: 25px;
    }
 
    .add-comment input,
    .add-comment textarea {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
 
    .add-comment button {
      margin-top: 10px;
      background: #0077cc;
      color: white;
      padding: 10px 20px;
      border: none;
      font-size: 15px;
      border-radius: 5px;
      cursor: pointer;
    }
 
    .add-comment button:hover {
      background: #005fa3;
    }
  </style>
  <script>
    function goHome() {
      window.location.href = 'index.php';
    }
  </script>
</head>
<body>
 
  <div class="header">
    <h1>My Blogger</h1>
  </div>
 
  <div class="container">
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <div class="meta">
      By <strong><?php echo htmlspecialchars($post['author']); ?></strong> | 
      Category: <?php echo htmlspecialchars($post['category']); ?> | 
      <?php echo $post['created_at']; ?>
    </div>
 
    <div class="content">
      <?php echo nl2br($post['content']); ?>
    </div>
 
    <div class="comments">
      <h3>Comments</h3>
 
      <div class="comment-box">
        <p><strong>Ali:</strong> Great article!</p>
      </div>
      <div class="comment-box">
        <p><strong>Sana:</strong> Thanks for sharing!</p>
      </div>
 
      <div class="add-comment">
        <h4>Leave a Comment</h4>
        <input type="text" placeholder="Your Name">
        <textarea placeholder="Your Comment"></textarea>
        <button>Post Comment</button>
      </div>
    </div>
 
    <a class="back" onclick="goHome()">← Back to Home</a>
  </div>
 
</body>
</html>
