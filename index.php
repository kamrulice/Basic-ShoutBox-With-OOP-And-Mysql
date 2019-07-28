<?php

	 include "shout.php";
	$shout = new Shout();


?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Shout Box</title>
	<link href="style.css" rel="stylesheet" rel="text/css" /> 
</head>
<body>
	<div class="wrapper clr">
		<header class="headersection clr">
			<h2>Basic ShoutBox With OOP And Mysql</h2>
		</header>
		<section class="contain clr">
			<div class="box">
				<ul>
					<?php
						$getData = $shout->GetAllData(); 
						if(isset($getData)){
						foreach($getData as $data){

					?>
					<li><span><?php echo $data['time'];?></span>--<b><?php echo $data['name'];?> </b><?php echo $data['body'];?></li>
				 <?php } } ?>
				</ul>
			</div>
					<?php
						if($_SERVER['REQUEST_METHOD']=='POST'){
						$shoutData = $shout->InsertData($_POST);
					}
					?>
			<div class="shoutform clr">
				<form action="" method="POST">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="name" required placeholder="Please Enter Your Name" /></td>
						</tr>
						<tr>
							<td>Body</td>
							<td>:</td>
							<td><input type="text" name="body" required placeholder="Please Enter Your Text"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="submit" value="Shout It"></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer class="footersection">
			<h2>&Copy ; Copyright ICE 3rd Batch , NSTU</h2>
		</footer>
	</div>
</body>
</html>