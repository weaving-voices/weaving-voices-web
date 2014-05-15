<?php
// For this script to work, a directory named ‘uploads’ has to exist 
// in the same directory as the script. 
// To store the files in a different directory change the value of $file_path.
	
   $file_path = "uploads/";
     
   $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
   echo "data = " . print_r($_FILES['uploaded_file']['name']) . "\n";
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
       echo "result = success";
   } else{
       echo "result = fail";
   }
?>
