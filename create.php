<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-md-2 col-md-offset-5">
		<h4 class="text-center">
		Create a New Account
		</h4>
		<hr/>
		<form action="insert.php" method="POST">
			<div class="form-group">
				<label>*Username:</label>
				<input type="text" name="Username" class="form-control"/>
			</div>
			<div class="form-group">
				<label>*Password:</label>
				<input type="password" name="Password"  class="form-control"/>
			</div>
			<div class="form-group">
				<label>*Password confirm:</label>
				<input type="password" name="PasswordConfirm"  class="form-control"/>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="Email"  class="form-control"/>
			</div>
			<div class="form-group">
				<label>Company:</label>
				<input type="text" name="Company"  class="form-control"/>
			</div>
			<div class="form-group">
				<label>First name:</label>
				<input type="text" name="FirstName"  class="form-control"/>
			</div>
			<div class="form-group">
				<label>Last name:</label>
				<input type="text" name="LastName"  class="form-control"/>
			</div>
                        <input type="submit" name="insertUser" value="Register new user" class="btn btn-primary btn-block"/>

	</form>
</div>
</body>
</html>
