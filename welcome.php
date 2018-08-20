<link rel="stylesheet" type="text/css" href="form.css">

<?php session_start(); ?>
<div class="body ontent">
	<div class="welcome">
		<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
		welcome <img src="<?= $_SESSION['avatar'] ?>">