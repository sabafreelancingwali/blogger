<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Blogger Clone - Home</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f2f6fc;
    }
 
    header {
      background-color: #0077cc;
      color: white;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
 
    header h1 {
      margin: 0;
      font-size: 28px;
    }
 
    .top-bar {
      padding: 15px;
      text-align: center;
      background: #eaf1f8;
      border-bottom: 1px solid #ccc;
    }
 
    .top-bar input[type="text"] {
      padding: 10px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }
 
    .categories {
      margin: 20px auto;
      text-align: center;
    }
 
    .categories button {
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 20px;
      padding: 10px 18px;
      margin: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: 0.3s;
    }
 
    .categories button:hover {
      background-color: #0077cc;
      color: white;
    }
 
    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 20px;
    }
 
    .post {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      cursor: pointer;
      transition: transform 0.2s;
    }
 
    .post:hover {
      transform: translateY(-5px);
    }
 
    .post h2 {
      margin-top: 0;
      color: #0077cc;
    }
 
    .post p {
      color: #555;
    }
 
    .post .meta {
      color: #999;
      font-size: 13px;
      margin-bottom: 10px;
    }
 
    .create-button {
      display: block;
      margin: 30px auto;
      text-align: center;
    }
 
    .create-button button {
      background-color: #0077cc;
      c
