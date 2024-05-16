<?php
$conn = new mysqli('localhost', 'root', '', 'sms');
if($conn){
   $sql = "UPDATE students SET name= 'Limon', age = 25 Where id = 1";
  if ($conn->query($sql)){
    echo "Updated";
  }
}else{
    echo "Connection Failed";
}
?>