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
 



* {
  box-sizing: border-box;
}
body{font-size: 100%;}
input[type=button]{margin-top: 2vh;width: 40%;text-align: center;margin-bottom: 5vh;}

h1{font-size: 150%;background-color: cadetblue;}
#myInput {
  background-image: url('images/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;

}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
  width:40%;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
header{text-align: center;} 
    </style>
</head>
<body>

<div class="container">
<div class="row">

<header><h1>Organisation name: View all IT employee records</h1></header>

<div class="mt-3 col-md-12 text-center">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for staff_id" title="Type in a staff_id">
<table id="myTable">
  <tr class="header">
    <th>StaffID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
  </tr>

<?php 
include 'includes/errors.php';
include 'includes/db_connx.php';


$sql = "SELECT staff_id, username, email, pwd FROM employee_details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo"<tr>";
    echo"<td>".$row["staff_id"]."</td>";
    echo"<td>".$row["username"]."</td>";
    echo"<td>".$row["email"]."</td>";
    echo"<td>".$row["pwd"]."</td>";
  echo "</tr>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>
</table>
<a href="input-employee.php"><input type="button" value="Back" class="btn btn-success"></a>
  </div> 
</div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>