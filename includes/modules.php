<?php

//count password length
function stringLen(){

    if (strlen($_POST['pwd']) < 8 || strlen($_POST['pwd']) > 15) {
      exit ("Password needs to be 8 - 15 characters");
   }
  
  }



//check if vars are set
if( isset($_POST['username']) && isset($_POST['pwd']) ){
    //regEx();
   
    //clean the data input of white space and HTML/PHP tags from string
  $user = trim(strip_tags($_POST['username']));// do this for data entry 
  $pwd = trim(strip_tags($_POST['pwd'])); // do this for data entry 

  stringLen();
    if (!preg_match('/^[a-zA-Z0-9]+/', $user)){
    
      exit ("Cannot include special characters in username");
    }
    
      

  include 'includes/db_connx.php';
  }
  else{
  
  echo "No data received";
    
  }

?>