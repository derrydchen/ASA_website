<?php
$email=$_REQUEST["#email"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Arab Student Association At Cornell</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- Auxilliary Stylesheets -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
</head>
<body>
  <div class="container" id="solid">
    <?php include "includes/nav.php" ?>
    <div id="thanks">
      <h2>Thanks for contacting us!</h2>
    </div>
    <div class="twoPar">
      <p>Thank you for responding and joining our contact list. We will E-mail you
        shortly at <?php echo($email);?> to inform you about upcoming events.</p>
        <p>We really appreciate it!!</p>
      </div>
    </div>
  </body>
  </html>
