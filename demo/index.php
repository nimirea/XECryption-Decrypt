<!DOCTYPE html>
<head>
  <title>XECryption Decrypter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  body {
    background-color:#bafbee;
    font-family:Helvetica,Arial,sans-serif;
    max-width:30rem;
    margin:0 auto;
    padding:1.5rem 3rem 3rem;
  }
  blockquote {
    border-left: 2px solid #29907b;
    padding-left:2rem;
    margin-left:0;
  }
  form textarea {
    width:100%;
    height:7rem;
  }
  form {
    margin-bottom:1.5rem;
  }
  img {
    margin:0 auto;
    display:block;
  }
  </style>
  <?php include('../xecryption-decrypt.php'); ?>
</head>
<body>
  <h1>XECryption Decrypter</h1>
  <?php
  if (!empty($_POST['encrypted']) && $_POST['encrypted'] != "Replace this text with your encrypted message.") {
    ?>
    <h2>Here's your decrypted message:</h2>
    <blockquote>
      <?php print decrypt(substr($_POST['encrypted'],1)); ?>
    </blockquote>
    <?php
  }


  ?>
  <h2>Decode A Message</h2>
  <form action="<?php print basename($_SERVER['REQUEST_URI']); ?>" method="post">
    <textarea name="encrypted">Replace this text with your encrypted message.</textarea>
    <p>Note: you can <a href="https://www.hackthissite.org/missions/realistic/6/encryption.php">generate your own coded messages using this cipher</a>.</p>
    <input type="submit"/>
  </form>
  <a href="https://github.com/nimirea/XECryption-Decrypt"><img src="GitHub-Mark-64px.png" alt="As seen on Github!"/></a>
</body>
