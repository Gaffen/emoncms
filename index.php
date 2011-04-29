<?php

$id=$_GET['id'];

if(!isset($_GET['id'])) 
	{
	$id = 'Homepage';
	}

?>
<h1>Hello World</h1>

<a href="contact.php">Contact</a>

  <div id="navbar">
    <?php @ require_once("menu.php"); ?>
  </div>
	<div id="content">
	<?php
if(!file_exists("$id.php"))
  {
  include("error_404.php");
  }
else
  {
  include("$id.php");
  }
?>

