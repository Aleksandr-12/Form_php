<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Form</title>
</head>

<body>
<?php echo $_GET['name'];?>
	<div class="container">
		<form action="/manager.php" method="get">
		  <div class="form-group">
			<label for="exampleInputEmail1">Имя</label>
			<input name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Имя">
		 </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Телефон</label>
			<input name="tel" type="phone" class="form-control" placeholder="Телефон">
		  </div>
		 <div class="form-group">
			<label for="exampleFormControlTextarea1">Обращение</label>
			<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</body>
</html>
