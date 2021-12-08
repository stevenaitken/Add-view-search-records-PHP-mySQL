<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation name: Staff Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">

    <style>
  input[type=submit]{margin-top: 2vh;width: 40%;text-align: center;}

input[type=button]{margin-top: 2vh;width: 40%;text-align: center;}
    
    </style>
</head>
<body>

<div class="container">
<div class="row">

<header><h1>Organisation name: IT employee records</h1></header>
<form action="add-employee.php" method="POST" name="add-employee" id ="add-employee">
<div class="mb-3 col-md-12">
    <label for="staffID" class="form-label">StaffID</label>
    <input type="text" class="form-control" id="staffID" name="staffID" maxlength="4" required pattern="[0-9]{4}" title="4 digits only.">
  </div>


  <div class="mb-3 col-md-12">
    <label for="user" class="form-label">Username</label>
    <input type="text" class="form-control" id="user" name="user"  title="2 to 7 alphanumeric characters and one underscore only"  maxlength="8" required pattern="[A-Za-z0-9_]{2,8}">
  </div>

  <div class="mb-3 col-md-12">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" maxlength="30" id="email" name="email" required>
  </div>

  <div class="mb-3 col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" name="pwd" title="Alphanumeric characters and one underscore only. Must be 8 to 15 characters in length" maxlength="15" required pattern="[A-Za-z0-9_]{8,15}" >
  </div>
  <div class="mt-3 col-md-12 text-center">
  <input type="submit" class="btn btn-primary" value="Add Record">
  </div>
  <div class="mt-3 col-md-12 text-center">

</form>

<a href="view-all.php"><input type="button" class="btn btn-success" value="View Records"></a>
  </div>
  <div class="mt-3 col-md-12 text-center">
  <a href="search-records.php"><input type="button" class="btn btn-success " value="Search Records"></a>
  </div>
</div>
</div>

</body>
</html>