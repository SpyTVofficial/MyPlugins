<!DOCTYPE html>
<?php require_once('../assets/assets.php'); ?>
<html>
    
    <head>    
        <link rel="stylesheet" href="../../assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> <?php echo htmlspecialchars($title); ?> Messages </title>
    </head>

    <body>


<div class="topnav">
  <a href="../index.php">Home</a>
  <a href="banned/index.php">Banned Players</a>
  <a href="muted/index.php">Muted Players</a>
  <a href="signin/index.php">Active Servers</a>
  <a href="manage/index.php">Manage Server</a>
  <a href="messages/index.php">Messages</a>
</div>

<div class="messages">
    <p1>Currently Open Messages: </p1>
    <p2>Closed Messages: </p2>
    <p3>Latest <bold>Open</bold> Message:</p3>
    <p4>Latest <bold>Closed</bold> Message:</p4>
</div>

<div class="footer">
  <p><a href="contact/index.php">Contact </a> | MyPlugins | &#169 2020 | <a href="faq/index.php">FAQ</a></p>
</div>

</body>
</html>