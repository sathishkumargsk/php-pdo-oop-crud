<html>
	<head>
		<title>PHP CRUD PDO OOP</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<div classs="row ">
		<h2>Add customer</h2>
		<form method="post" action="" class="col-md-6">
		<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" required>
        </div>
		
		<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" required>
		</div>

		<div class="form-group">
		<label for="phone">Phone:</label>
		<input type="phone" class="form-control" required>
		</div>
        
        <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" required>
        </div> 
      
        <div class="form-group">
        <button type="submit" class="btn btn-warning">Submit</button>
        </div>
        </form>
        </div>
        </div>


        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>