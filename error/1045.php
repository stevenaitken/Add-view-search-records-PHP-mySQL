<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<style>


    body{
        background-color:black;
background-image:radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 40px),
radial-gradient(white, rgba(255,255,255,.15) 1px, transparent 30px),
radial-gradient(white, rgba(255,255,255,.1) 2px, transparent 40px),
radial-gradient(rgba(255,255,255,.4), rgba(255,255,255,.1) 2px, transparent 30px);
background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
background-position: 0 0, 40px 60px, 130px 270px, 70px 100px;}

.error-code{font-size: 400%;

margin-top: -50px;
font-family: 'Orbitron', sans-serif;
}


img{
    width: 70%;
    transform: rotate(50deg);
    margin-top: -100px;
}

h1{font-size: 250%;}

a:link, a:visited{color: #fff;}
a:hover, .error-code{color: #00ff00;}

</style>


</head>
<body>

<div class="container-fluid p-5 text-white text-center">
<h1>Ground Control to Major Tom!</h1>
  <h6>It looks like we have become temporarily disconnected!</h6>
    <p>The database you are looking for is now beyond your reach and ours!</p>
    <p>Let's get you back home.</p>
      <p><a href="#">HOME PAGE</a></p>

</div>
  
<div class="container mt-5 text-white">
  <div class="row">
    <div class="col-sm-6">
     
    
   

    <img src="../images/astronaut.png">
    </div>
    <div class="col-sm-6">
        
      <h3 class="error-code">Error: 1045</h3>
 
    </div>
    
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
