<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create a New Blog Post</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
      margin: 0;
      padding: 0;
    }
 
    .container {
      width: 90%;
      max-width: 700px;
      margin: 40px auto;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      padding: 30px;
    }
 
    h2 {
      text-align: center;
      color: #0077cc;
      margin-bottom: 25px;
    }
 
    label {
      display: block;
      margin-top: 20px;
      font-weight: bold;
      color: #333;
    }
 
    input[type="text"], textarea, select {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      resize: vertical;
    }
 
    textarea {
      height: 200px;
    }
 
    button {
      background-color: #0077cc;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      margin-top: 25px;
      width: 100%;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s;
    }
 
    button:hover {
      background-color: #005fa3;
    }
 
    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #555;
      text-decoration: none;
    }
 
    .back-link:hover {
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Create New Blog Post</h2>
    <form method="POST" action="save_post.php">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" required>
 
      <label for="author">Author Name</label>
      <input type="text" id="author" name="author" required>
 
      <label for="category">Category</label>
      <select id="category" name="category" required>
        <option value="">-- Select Category --</option>
        <option value="Technology">Technology</option>
        <option value="Lifestyle">Lifestyle</option>
        <option value="Business">Business</op
