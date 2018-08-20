<?php
?>
<html>
<head>
	<title>log in form</title>

<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="body-content">
    <div class="module">
        <h1>create an account</h1>
        <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="User Name" name="username" required/>
            <Input type="email" placeholder="Email" name="email" required/>
            <Input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
            <Input type="password" placeholder="Confirm password" name="confirmpassword" autocomplete="new-password" required />
          	<div class="avatar"><label>select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
          	<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
          </form>
    </div>
</div>
</body>
</html>